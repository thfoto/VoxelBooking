/** @vitest-environment jsdom */
import { readFileSync } from 'node:fs';
import { afterEach, describe, expect, it } from 'vitest';
import Alpine from '@alpinejs/csp';
import { registerFormattedText, renderFormattedText } from '../../resources/js/booking/formatted-text.js';

describe('minimal event description formatting', () => {
    it('formats the acceptance example without changing line breaks', () => {
        const element = document.createElement('p');
        renderFormattedText(element, '**Was ist Weiblichkeit?**\n\nNormaler Text.\n\n__Was wir tun__\n\nNoch eine Zeile.');
        expect(element.innerHTML).toBe('<strong>Was ist Weiblichkeit?</strong>\n\nNormaler Text.\n\n<u>Was wir tun</u>\n\nNoch eine Zeile.');
        const css = readFileSync('resources/css/booking.css', 'utf8');
        expect(css).toMatch(/\.vb-book-event-detail-desc\s*\{[^}]*white-space:\s*pre-line;/);
    });

    it.each([
        ['Normal **fett** normal', 'Normal <strong>fett</strong> normal'],
        ['**eins**__zwei__**drei**', '<strong>eins</strong><u>zwei</u><strong>drei</strong>'],
        ['**offen und __offen', '**offen und __offen'],
        ['*kursiv* [Link](https://example.com) `code`', '*kursiv* [Link](https://example.com) `code`'],
        ['**a __b__ c**', '<strong>a __b__ c</strong>'],
        ['A\r\n\r\n**B\nC**', 'A\r\n\r\n<strong>B\nC</strong>'],
        [null, ''],
        [undefined, ''],
        ['', ''],
    ])('renders %j predictably', (input, expected) => {
        const element = document.createElement('p');
        renderFormattedText(element, input);
        expect(element.innerHTML).toBe(expected);
    });

    it.each([
        '<script>alert("XSS")</script>',
        '<img src=x onerror=alert(1)>',
        '<svg onload=alert(1)></svg>',
        '<span x-init="alert(1)">attack</span>',
        '&lt;img src=x onerror=alert(1)&gt;',
    ])('keeps untrusted input literal: %s', input => {
        const element = document.createElement('p');
        for (const marker of ['', '**', '__']) {
            renderFormattedText(element, `${marker}${input}${marker}`);
            expect(element.textContent).toBe(input);
            expect([...element.querySelectorAll('*')].map(node => node.tagName))
                .toEqual(marker ? [marker === '**' ? 'STRONG' : 'U'] : []);
            expect(element.querySelector('[onerror], [onload], [x-init]')).toBeNull();
        }
    });
});

describe('Alpine CSP lifecycle', () => {
    afterEach(() => {
        Alpine.destroyTree(document.body);
        document.body.replaceChildren();
        Alpine.stopObservingMutations();
    });

    it('renders on x-if creation, reacts to event changes, and recreates safely', async () => {
        registerFormattedText(Alpine);
        Alpine.data('descriptionTest', () => ({
            selectedEvent: null,
            get eventDescription() { return this.selectedEvent ? this.selectedEvent.description : ''; },
            get hasEventDescription() { return !!(this.selectedEvent && this.selectedEvent.description); },
        }));
        // Use the production element so a template/directive mismatch fails here.
        const page = readFileSync('templates/booking/page.php', 'utf8');
        const paragraph = page.match(/<p class="vb-book-event-detail-desc"[^>]*><\/p>/)[0];
        document.body.innerHTML = `<div x-data="descriptionTest"><template x-if="selectedEvent"><div>${paragraph}</div></template></div>`;
        Alpine.start();
        const state = Alpine.$data(document.body.firstElementChild);
        expect(document.querySelector('p')).toBeNull();

        state.selectedEvent = { description: '**<img src=x onerror=alert(1)>**\n\n__Titel__' };
        await Alpine.nextTick();
        const first = document.querySelector('p');
        expect(first.querySelector('strong').textContent).toBe('<img src=x onerror=alert(1)>');
        expect(first.querySelector('img')).toBeNull();
        expect(first.querySelector('u').textContent).toBe('Titel');
        expect(first.style.display).not.toBe('none');

        state.selectedEvent = { description: 'Normal **fett** normal' };
        await Alpine.nextTick();
        expect(first.innerHTML).toBe('Normal <strong>fett</strong> normal');

        state.selectedEvent.description = '';
        await Alpine.nextTick();
        expect(first.textContent).toBe('');
        await expect.poll(() => first.style.display).toBe('none');

        state.selectedEvent = null;
        await Alpine.nextTick();
        expect(document.querySelector('p')).toBeNull();
        state.selectedEvent = { description: '__Wieder da__' };
        await Alpine.nextTick();
        expect(document.querySelector('p')).not.toBe(first);
        expect(document.querySelector('p').innerHTML).toBe('<u>Wieder da</u>');
    });
});
