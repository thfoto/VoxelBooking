/**
 * Minimal text formatting: **bold** and __underlined__ only.
 * Pairs are non-nested; unmatched markers and all other syntax stay literal.
 * Text (including line breaks) never passes through an HTML parser.
 */
export function renderFormattedText(element, value) {
    const text = value == null ? '' : String(value);
    const document = element.ownerDocument;
    const fragment = document.createDocumentFragment();
    const pairs = /(\*\*|__)([\s\S]+?)\1/g;
    let offset = 0;

    for (const match of text.matchAll(pairs)) {
        fragment.appendChild(document.createTextNode(text.slice(offset, match.index)));
        const formatted = document.createElement(match[1] === '**' ? 'strong' : 'u');
        formatted.textContent = match[2];
        fragment.appendChild(formatted);
        offset = match.index + match[0].length;
    }

    fragment.appendChild(document.createTextNode(text.slice(offset)));
    element.replaceChildren(fragment);
}

export function registerFormattedText(Alpine) {
    // Same reactive lifecycle as x-text: also runs when x-if creates the element.
    // Alpine disposes this effect when the element is removed.
    Alpine.directive('formatted-text', (element, { expression }, { effect, evaluateLater }) => {
        const evaluate = evaluateLater(expression);
        effect(() => {
            evaluate(value => {
                Alpine.mutateDom(() => renderFormattedText(element, value));
            });
        });
    });
}
