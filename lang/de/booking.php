<?php

declare(strict_types=1);

/**
 * Deutsche Übersetzungen: öffentlicher Buchungsablauf.
 *
 * Key-Konvention: section.element
 * Platzhalter: :name (werden zur Laufzeit ersetzt)
 * Pluralformen: {0} Keine|{1} Eine|[2,*] :count Einträge
 */

return [
    // ── Step Titles ──
    'steps' => [
        'service_title'    => 'Service auswählen',
        'staff_title'      => 'Wen möchtest du auswählen?',
        'staff_subtitle'   => 'Wähle ein Teammitglied oder lass uns die zuerst verfügbare Person zuweisen.',
        'date_title'       => 'Datum auswählen',
        'time_title'       => 'Uhrzeit auswählen',
        'details_title'    => 'Deine Angaben',
        'details_subtitle' => 'Wir senden dir eine Bestätigung per E-Mail.',
        'confirm_title'    => 'Buchung bestätigen',
        'confirm_subtitle' => 'Bitte prüfe die Angaben unten.',
        // Resource-pattern
        'resource_title'   => 'Raum auswählen',
        'dates_title'      => 'Zeitraum auswählen',
        'dates_subtitle'   => 'Wähle Anreise- und Abreisedatum.',
        'guests_title'     => 'Anzahl der Gäste',
    ],

    // ── Staff ──
    'staff' => [
        'any_available' => 'Beliebige verfügbare Person',
    ],

    // ── Back Navigation ──
    'back' => [
        'change_service'    => '← Service ändern',
        'change_staff'      => '← Teammitglied ändern',
        'change_date'       => '← Datum oder Uhrzeit ändern',
        'generic'           => '← Zurück',
        'change_guests'     => '← Gäste ändern',
        'change_spots'      => '← Plätze ändern',
        'edit_details'      => '← Angaben bearbeiten',
        'change_party_size' => '← Personenzahl ändern',
        'change_date_cap'   => '← Datum ändern',
        'change_event'      => '← Event ändern',
    ],

    // ── Form Labels ──
    'form' => [
        'name_label'        => 'Name',
        'name_placeholder'  => 'Dein Name',
        'email_label'       => 'E-Mail',
        'email_placeholder' => 'du@beispiel.de',
        'phone_label'       => 'Telefon',
        'phone_placeholder' => 'Deine Telefonnummer',
        'notes_label'       => 'Anmerkungen',
        'notes_placeholder' => 'Gibt es etwas, das wir wissen sollten?',
        'consent_default'   => 'Ich stimme der Verarbeitung meiner personenbezogenen Daten für diese Buchung zu.',
        'privacy_link'      => 'Datenschutzerklärung',
    ],

    // ── Buttons ──
    'buttons' => [
        'review'            => 'Buchung prüfen',
        'confirm'           => 'Buchung bestätigen',
        'book_another'      => 'Weitere Buchung',
        'add_to_calendar'   => 'Zu Google Kalender hinzufügen',
        'download_ics'      => 'Für Kalender herunterladen',
        'reschedule'        => 'Umbuchen',
        'cancel_booking'    => 'Buchung stornieren',
        'pick_another_time' => 'Andere Uhrzeit wählen',
        'continue'          => 'Weiter',
        'selected_time'     => 'Ausgewählt',
    ],

    // ── Confirmation ──
    'confirmed' => [
        'heading'         => 'Buchung bestätigt',
        'message'         => 'Eine Bestätigung wurde an :email gesendet.',
        'email_sent'      => 'Eine Bestätigung wurde an :email gesendet.',
        'reference_label' => 'Buchungsnummer',
    ],

    // ── Pending Approval ──
    'pending' => [
        'heading'         => 'Buchung eingegangen',
        'message'         => 'Deine Buchung wartet auf Bestätigung. Wir informieren dich, sobald sie bestätigt wurde.',
        'reference_label' => 'Buchungsnummer',
    ],

    // ── Review ──
    'review' => [
        'cancellation_policy_label' => 'Stornierungsbedingungen',
    ],

    // ── Summary ──
    'summary' => [
        'service_label'   => 'Service',
        'with_label'      => 'Bei',
        'date_label'      => 'Datum',
        'time_label'      => 'Uhrzeit',
        'duration_label'  => 'Dauer',
        'price_label'     => 'Preis',
        // Resource-pattern
        'resource_label'  => 'Raum',
        'check_in_label'  => 'Anreise',
        'check_out_label' => 'Abreise',
        'nights_label'    => 'Nächte',
        'guests_label'    => 'Gäste',
        'total_label'     => 'Gesamt',
        'per_night'       => '/Nacht',
        // Contact details (review step)
        'contact_name'    => 'Name',
        'contact_email'   => 'E-Mail',
        'contact_phone'   => 'Telefon',
    ],

    // ── Resource Pattern ──
    'resource' => [
        'summary_resource'             => 'Raum',
        'check_in_label'               => 'Anreise',
        'check_out_label'              => 'Abreise',
        'nights_label'                 => 'Nächte',
        'guests_label'                 => 'Gäste',
        'total_label'                  => 'Gesamt',
        'per_night'                    => '/Nacht',
        'select_check_in'              => 'Anreisedatum auswählen',
        'select_check_out'             => 'Jetzt das Abreisedatum auswählen',
        'amenities_label'              => 'Ausstattung',
        'capacity_label'               => 'Bis zu :count Gäste',
        'stay_range'                   => ':min–:max Nächte',
        'max_guests_reached'           => 'Maximal :count Gäste für diesen Raum',
        'error_resource_not_found'     => 'Raum nicht gefunden.',
        'error_invalid_date_range'     => 'Die Abreise muss nach der Anreise liegen.',
        'error_min_stay_violation'     => 'Die Mindestaufenthaltsdauer wurde nicht erreicht.',
        'error_max_stay_violation'     => 'Die maximale Aufenthaltsdauer wurde überschritten.',
        'error_capacity_exceeded'      => 'Zu viele Gäste für diesen Raum.',
        'error_too_soon'               => 'Das Anreisedatum liegt zu früh.',
        'error_too_far'                => 'Das Anreisedatum liegt zu weit in der Zukunft.',
        'error_date_blocked'           => 'Ein oder mehrere Daten sind gesperrt.',
        'error_already_booked'         => 'Dieser Raum ist für diesen Zeitraum bereits gebucht.',
        'error_invalid_check_in_day'   => 'Anreise ist an diesem Wochentag nicht möglich.',
        'error_invalid_check_out_day'  => 'Abreise ist an diesem Wochentag nicht möglich.',
        'select_dates'                 => 'Wähle dein neues Anreise- und Abreisedatum.',
    ],

    // ── Empty States ──
    'empty' => [
        'no_services'       => 'Keine Services verfügbar',
        'no_services_desc'  => 'Für dieses Angebot wurden noch keine Services eingerichtet.',
        'no_availability'   => 'In diesem Monat sind keine freien Termine verfügbar.',
        'no_times'          => 'An diesem Tag sind keine freien Zeiten verfügbar.',
        'coming_soon'       => 'Demnächst verfügbar',
        'coming_soon_desc'  => 'Dieses Buchungsmuster ist noch nicht verfügbar.',
        '404_title'         => 'Seite nicht gefunden',
        '404_desc'          => 'Diese Buchungsseite existiert nicht oder ist nicht mehr aktiv.',
        '404_help'          => 'Falls du über einen Link hierher gelangt bist, kontaktiere bitte den Anbieter direkt.',
        // Resource-pattern
        'no_resources'      => 'Keine Räume verfügbar',
        'no_resources_desc' => 'Für dieses Angebot wurden noch keine Räume eingerichtet.',
        'no_dates'          => 'In diesem Monat sind keine verfügbaren Daten vorhanden.',
        // Capacity-pattern
        'no_slots'          => 'Keine Zeitfenster verfügbar',
        'no_slots_desc'     => 'Für dieses Angebot wurden noch keine Zeitfenster eingerichtet.',
        'no_slots_date'     => 'An diesem Tag sind keine Plätze verfügbar.',
        // Event-pattern
        'no_events'         => 'Keine kommenden Events',
        'no_events_desc'    => 'Aktuell sind keine kommenden Events geplant.',
    ],

    // ── Capacity-Pattern Booking Page ──
    'capacity' => [
        'party_size_title'        => 'Personenzahl',
        'party_size_label'        => 'Wie viele Personen?',
        'party_size_hint'         => 'Wähle die Anzahl der Personen für diese Buchung.',
        'guest'                   => 'Person',
        'guests'                  => 'Personen',
        'date_title'              => 'Datum auswählen',
        'time_title'              => 'Uhrzeit auswählen',
        'spots_remaining'         => ':count Plätze frei',
        'slot_full'               => 'Ausgebucht',
        'min_guests_hint'         => 'Mindestens :count Personen',
        'max_party_size_reached'  => 'Maximal :count Personen pro Buchung',
    ],

    // ── Event-Pattern Booking Page ──
    'event' => [
        'events_title'        => 'Kommende Events',
        'event_detail_title'  => 'Eventdetails',
        'spots_title'         => 'Wie viele Plätze?',
        'spot'                => 'Platz',
        'spots'               => 'Plätze',
        'spots_remaining'     => ':count Plätze frei',
        'event_full'          => 'Dieses Event ist ausgebucht.',
        'max_spots_reached'   => 'Maximal :count Plätze pro Buchung',
        'max_reached'         => 'Maximale Platzanzahl erreicht',
        'join_waitlist'       => 'Auf Warteliste setzen',
        'waitlist_notice'     => 'Du wirst auf die Warteliste gesetzt.',
        'waitlisted_title'    => 'Du bist auf der Warteliste',
        'waitlisted_message'  => 'Wir informieren dich, sobald ein Platz frei wird.',
        'location_label'      => 'Ort',
        'price_label'         => 'Preis',
        'date_label'          => 'Datum',
        'time_label'          => 'Uhrzeit',
        'per_person'          => 'pro Person',
        'free'                => 'Kostenlos',
        'select_event'        => 'Event auswählen…',
        'full_badge'          => 'Ausgebucht',
        'waitlist_badge'      => 'Warteliste',
        'no_upcoming'         => 'Keine kommenden Events für eine Umbuchung verfügbar.',
        'spots_left'          => 'Plätze frei',
    ],

    // ── Errors & Toasts ──
    'errors' => [
        'slot_taken'        => 'Dieser Termin wurde gerade vergeben. Bitte wähle einen anderen.',
        'generic'           => 'Etwas ist schiefgelaufen. Bitte versuche es erneut.',
        'connection'        => 'Es ist ein Verbindungsfehler aufgetreten. Bitte versuche es erneut.',
        'spam_detected'     => 'Deine Anfrage konnte nicht verarbeitet werden. Bitte versuche es erneut.',
        'required_name'     => 'Bitte gib deinen Namen ein.',
        'required_email'    => 'Bitte gib eine gültige E-Mail-Adresse ein.',
        'required_consent'  => 'Bitte bestätige die Einwilligung, um fortzufahren.',
    ],

    // ── Common / UI ──
    'common' => [
        'dismiss' => 'Schließen',
    ],

    // ── Timezone ──
    'timezone' => [
        'label'            => 'Zeitzone',
        'same_as_business' => 'wie beim Anbieter',
        'notice'           => 'Zeiten werden in deiner Zeitzone angezeigt (:tz)',
        'search'           => 'Zeitzone suchen…',
        'group_americas'   => 'Amerika',
        'group_europe'     => 'Europa',
        'group_asia'       => 'Asien & Pazifik',
        'group_africa'     => 'Afrika',
        'group_other'      => 'Weitere',
    ],

    // ── Duration Formatting ──
    'duration' => [
        'hours'        => 'Std.',
        'minutes'      => 'Min.',
        'hours_long'   => ':h Std. :m Min.',
        'minutes_only' => ':m Min.',
    ],

    // ── Time Period Labels (slot grouping) ──
    'time_periods' => [
        'morning'   => 'Vormittag',
        'afternoon' => 'Nachmittag',
        'evening'   => 'Abend',
    ],

    // ── API Error Messages (server-side, returned as JSON) ──
    'api' => [
        'invalid_date'          => 'Datumsparameter erforderlich (JJJJ-MM-TT)',
        'name_email_required'   => 'Name und E-Mail-Adresse sind erforderlich.',
        'invalid_email'         => 'Ungültige E-Mail-Adresse.',
        'phone_required'        => 'Telefonnummer ist erforderlich.',
        'start_time_required'   => 'Startzeit ist erforderlich.',
        'slot_unavailable'      => 'Dieser Termin wurde gerade vergeben.',
        'booking_failed'        => 'Beim Erstellen deiner Buchung ist ein Fehler aufgetreten. Bitte versuche es erneut.',
        'invalid_json'          => 'Ungültige Anfrage.',
        'spam_detected'         => 'Ungültige Anfrage.',
        'spam_retry'            => 'Bitte versuche es erneut.',
        'max_bookings_exceeded' => 'Du hast die maximale Anzahl an Buchungen für diesen Tag erreicht.',
        'csrf_mismatch'         => 'Ungültiges Sicherheitstoken. Bitte lade die Seite neu und versuche es erneut.',
        // Resource-pattern
        'resource_required'     => 'Bitte wähle einen Raum.',
        'check_in_required'     => 'Anreisedatum ist erforderlich.',
        'check_out_required'    => 'Abreisedatum ist erforderlich.',
        'guest_count_invalid'   => 'Die Gästezahl muss mindestens 1 sein.',
        'resource_unavailable'  => 'Dieser Raum ist für den gewählten Zeitraum nicht verfügbar.',
        // Capacity-pattern
        'slot_required'         => 'Bitte wähle ein Zeitfenster.',
        'date_required'         => 'Bitte wähle ein Datum.',
        'party_size_invalid'    => 'Die Personenzahl muss mindestens 1 sein.',
        'party_too_small'       => 'Die Personenzahl liegt unter dem Minimum für dieses Zeitfenster.',
        'capacity_exceeded'     => 'Für diese Personenzahl sind nicht genügend Plätze frei.',
        // Event-pattern
        'event_required'        => 'Bitte wähle ein Event.',
        'spot_count_invalid'    => 'Die Anzahl der Plätze muss mindestens 1 sein.',
        'spot_count_too_few'    => 'Mindestens :min Plätze pro Buchung.',
        'spot_count_too_many'   => 'Maximal :max Plätze pro Buchung.',
        'event_full'            => 'Dieses Event ist ausgebucht.',
        'event_cancelled'       => 'Dieses Event wurde abgesagt.',
        'waitlist_full'         => 'Die Warteliste für dieses Event ist voll.',
    ],

    // ── Recovery ──
    'recovery' => [
        'slot_taken' => 'Dieser Termin wurde gerade gebucht. Probiere stattdessen einen dieser Termine:',
    ],

    // ── Calendar ──
    'calendar' => [
        'today'      => 'Heute',
        'label'      => 'Kalender',
        'prev_month' => 'Vorheriger Monat',
        'next_month' => 'Nächster Monat',
    ],

    // ── Day Names (0=Sunday) ──
    'days' => [
        0 => 'Sonntag',
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
    ],

    // ── Short Day Names ──
    'days_short' => [
        0 => 'SO',
        1 => 'MO',
        2 => 'DI',
        3 => 'MI',
        4 => 'DO',
        5 => 'FR',
        6 => 'SA',
    ],

    // ── Month Names (1-12) ──
    'months' => [
        1  => 'Januar',
        2  => 'Februar',
        3  => 'März',
        4  => 'April',
        5  => 'Mai',
        6  => 'Juni',
        7  => 'Juli',
        8  => 'August',
        9  => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Dezember',
    ],

    // ── Footer ──
    'footer' => [
        'powered_by' => 'Bereitgestellt von',
    ],

    // ── Theme Toggle ──
    'theme' => [
        'switch_to_light' => 'Zum hellen Modus wechseln',
        'switch_to_dark'  => 'Zum dunklen Modus wechseln',
        'toggle'          => 'Darstellung wechseln',
    ],

    // ── Privacy Pages ──
    'privacy' => [
        'page_title'              => 'Deine Daten',
        'meta_description'        => 'Prüfe deine bei :business gespeicherten Daten',
        'not_found'               => 'Seite nicht gefunden',
        'export_failed'           => 'Export fehlgeschlagen. Bitte versuche es später erneut.',
        'subtitle'                => 'Deine bei diesem Anbieter gespeicherten Daten',
        'personal_info'           => 'Persönliche Daten',
        'name_label'              => 'Name',
        'email_label'             => 'E-Mail',
        'phone_label'             => 'Telefon',
        'customer_since'          => 'Kunde seit',
        'booking_history'         => 'Buchungsverlauf',
        'no_bookings'             => 'Keine Buchungen gefunden.',
        'party_size'              => 'Personenzahl',
        'source'                  => 'Quelle',
        'consent_records'         => 'Einwilligungen',
        'consented'               => 'Eingewilligt',
        'actions_title'           => 'Aktionen',
        'gdpr_rights'             => 'Nach der DSGVO hast du das Recht, deine Daten zu exportieren oder ihre Löschung zu beantragen.',
        'export_data'             => 'Daten exportieren (JSON)',
        'request_deletion'        => 'Löschung beantragen',
        'confirm_warning_title'   => 'Bist du sicher?',
        'confirm_warning_body'    => 'Damit beantragst du die dauerhafte Löschung deiner personenbezogenen Daten. Sobald der Anbieter die Löschung durchgeführt hat, kann sie nicht rückgängig gemacht werden.',
        'cancel'                  => 'Abbrechen',
        'confirm_deletion'        => 'Löschung bestätigen',
        'footer_server'           => 'Deine Daten werden auf dem Server von :business gespeichert',
        'anonymized_page_title'   => 'Daten entfernt',
        'anonymized_title'        => 'Deine Daten wurden entfernt',
        'anonymized_message'      => 'Deine personenbezogenen Daten wurden wie angefordert anonymisiert. Buchungsdaten bleiben für betriebliche Zwecke erhalten. Name, E-Mail-Adresse, Telefonnummer und persönliche Notizen wurden dauerhaft entfernt.',
        'deletion_req_page_title' => 'Löschung beantragt',
        'deletion_req_title'      => 'Löschung beantragt',
        'deletion_req_message'    => 'Dein Antrag auf Datenlöschung wurde erfasst. Der Anbieter wurde informiert und wird deine Anfrage bearbeiten.',
        'deletion_req_next_title' => 'Wie geht es weiter?',
        'deletion_req_next_body'  => 'Der Anbieter prüft deine Anfrage und entfernt deine personenbezogenen Daten. Nach der DSGVO muss die Anfrage innerhalb von 30 Tagen beantwortet werden. Buchungsdaten können in anonymisierter Form für betriebliche Zwecke erhalten bleiben. Persönliche Identifikationsmerkmale werden entfernt.',
    ],

    // ── Self-Service Manage Page ──
    'manage' => [
        'page_title'                     => 'Buchung verwalten',
        'heading'                        => 'Deine Buchung',
        'cancel_heading'                 => 'Buchung stornieren',
        'cancel_confirm'                 => 'Möchtest du diese Buchung wirklich stornieren?',
        'cancel_reason_label'            => 'Grund (optional)',
        'cancel_reason_placeholder'      => 'Wenn du möchtest, teile uns den Grund für die Stornierung mit…',
        'cancel_button'                  => 'Ja, Buchung stornieren',
        'cancel_nevermind'               => 'Buchung behalten',
        'cancelled_heading'              => 'Buchung storniert',
        'cancelled_message'              => 'Deine Buchung wurde storniert.',
        'book_again'                     => 'Erneut buchen',
        'time_gate_cancel'               => 'Diese Buchung kann nicht mehr storniert werden.',
        'time_gate_reschedule'           => 'Diese Buchung kann nicht mehr umgebucht werden.',
        'not_found'                      => 'Buchung nicht gefunden.',
        'already_cancelled'              => 'Diese Buchung wurde bereits storniert.',
        'cancellation_disabled'          => 'Eine Stornierung ist für diese Buchung nicht möglich.',
        'rescheduling_disabled'          => 'Eine Umbuchung ist für diese Buchung nicht möglich.',
        'same_slot'                      => 'Du hast denselben Termin wie in deiner aktuellen Buchung ausgewählt.',
        'status_confirmed'               => 'Bestätigt',
        'status_pending'                 => 'Wartet auf Bestätigung',
        'status_cancelled'               => 'Storniert',
        'status_rescheduled'             => 'Umgebucht',
        'status_completed'               => 'Abgeschlossen',
        'loading'                        => 'Buchungsdetails werden geladen…',
        // Reschedule flow
        'reschedule_heading'             => 'Buchung umbuchen',
        'reschedule_pick_date'           => 'Neues Datum und neue Uhrzeit auswählen',
        'reschedule_review_heading'      => 'Umbuchung bestätigen',
        'reschedule_review_subtitle'     => 'Deine Buchung wird auf den neuen Termin verschoben.',
        'reschedule_original_label'      => 'Aktuell',
        'reschedule_new_label'           => 'Neuer Termin',
        'reschedule_confirm_button'      => 'Umbuchung bestätigen',
        'reschedule_cancel'              => '← Zurück zur Buchung',
        'reschedule_success_heading'     => 'Buchung umgebucht',
        'reschedule_success_message'     => 'Deine Buchung wurde auf den neuen Termin verschoben.',
        'reschedule_back_to_date'        => '← Datum oder Uhrzeit ändern',
        'reschedule_reason_disabled'     => 'Eine Umbuchung ist für diese Buchung nicht möglich.',
        'reschedule_reason_too_late'     => 'Der Zeitraum für eine Umbuchung dieser Buchung ist abgelaufen.',
        'reschedule_reason_not_confirmed'=> 'Nur bestätigte Buchungen können umgebucht werden.',
        'privacy_link'                    => 'Deine Daten & Datenschutz',
    ],

    // ── Demo Mode ──
    'demo_notice' => 'Demo-Modus — Änderungen werden täglich zurückgesetzt.',
];
