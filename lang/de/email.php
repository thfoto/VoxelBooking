<?php

declare(strict_types=1);

/**
 * English translations: email subjects and content.
 */
return [
    'booking_confirmation' => [
        'subject'  => 'Buchung bestätigt – :service am :date',
        'greeting' => 'Hallo :name,',
        'body'     => 'Deine Buchung wurde bestätigt.',
        'details'  => 'Buchungsdetails',
        'footer'   => 'Wenn du Änderungen vornehmen möchtest, kontaktiere uns bitte.',
    ],

    'booking_reminder' => [
        'subject'  => 'Erinnerung: :service morgen um :time',
        'greeting' => 'Hallo :name,',
        'body'     => 'Dies ist eine Erinnerung an deinen bevorstehenden Termin.',
    ],

    'operator_notification' => [
        'subject' => 'Neue Buchung: :service – :customer',
        'body'    => 'Es wurde eine neue Buchung erstellt.',
    ],

    'operator_cancellation' => [
        'subject' => 'Buchung storniert: :service – :customer',
        'body'    => 'Eine Buchung wurde storniert.',
    ],

    'privacy_acknowledgment' => [
        'subject'  => 'Deine Datenschutzanfrage ist eingegangen',
        'greeting' => 'Hallo :name,',
        'body'     => 'Wir haben deine Anfrage erhalten und bearbeiten sie innerhalb von 30 Tagen.',
    ],

    'deletion_completed' => [
        'subject' => 'Deine Daten wurden gelöscht',
        'body'    => 'Deine personenbezogenen Daten wurden aus unseren Systemen entfernt.',
    ],

    'export_acknowledgment' => [
        'subject' => 'Dein Datenexport von :tenant',
        'title'   => 'Datenexport abgeschlossen',
        'body'    => 'Deine personenbezogenen Daten wurden von :tenant exportiert. Die Exportdatei wurde während deiner Sitzung auf dein Gerät heruntergeladen.',
        'footer'  => 'Falls du diesen Export nicht angefordert hast, kontaktiere den Anbieter bitte direkt.',
    ],

    'deletion_acknowledgment' => [
        'subject' => 'Löschantrag eingegangen — :tenant',
        'title'   => 'Löschantrag eingegangen',
        'body'    => 'Dein Antrag auf Datenlöschung wurde an :tenant übermittelt. Der Anbieter wird ihn gemäß den Datenschutzbestimmungen bearbeiten.',
        'footer'  => 'Nach DSGVO muss der Anbieter innerhalb von 30 Tagen reagieren. Deine personenbezogenen Daten werden nach Bestätigung anonymisiert.',
    ],

    'operator_deletion' => [
        'subject'          => 'New deletion request — :customer',
        'title'            => 'Neuer Löschantrag',
        'body'             => 'Ein Kunde hat die Löschung seiner Daten beantragt.',
        'detail_customer'  => 'Kunde:',
        'detail_email'     => 'E-Mail:',
        'detail_hashed'    => '(gehasht)',
        'detail_tenant'    => 'Anbieter:',
        'footer'           => 'Melde dich bei :app_name an und öffne die Löschwarteschlange.',
    ],

    'business_user_welcome' => [
        'subject'           => "Du wurdest eingeladen, :tenant zu verwalten",
        'title'             => "Einladung",
        'greeting'          => 'Hallo :name,',
        'body'              => 'Für dich wurde ein Konto zur Verwaltung der Buchungen bei :tenant erstellt.',
        'detail_email'      => 'E-Mail',
        'detail_password'   => 'Temporäres Passwort',
        'detail_login_url'  => 'Login-URL',
        'cta_label'         => 'Bei :tenant anmelden',
        'change_password'   => 'Bitte ändere dein Passwort nach der ersten Anmeldung.',
        'booking_page_hint' => 'Deine Buchungsseite ist erreichbar unter:',
        'footer'            => 'Gesendet von :app_name im Auftrag von :tenant.',
    ],

    'waitlist_confirmation' => [
        'subject'  => 'Warteliste — :event',
        'heading'  => "Du stehst auf der Warteliste",
        'greeting' => 'Hallo :name,',
        'body'     => "Das Event ist derzeit ausgebucht. Du wurdest auf die Warteliste gesetzt. Wir informieren dich, sobald ein Platz frei wird.",
        'footer'   => 'If you have any questions, please contact us.',
    ],

    'cancellation' => [
        'subject'    => 'Buchung storniert — :business',
        'heading'    => 'Buchung storniert',
        'greeting'   => 'Hallo :name,',
        'body'       => 'Deine Buchung wurde wie gewünscht storniert.',
        'footer'     => 'Falls dies ein Irrtum war, kannst du jederzeit neu buchen.',
        'book_again' => 'Erneut buchen',
    ],

    'approval_request' => [
        'subject'  => 'Deine Buchungsanfrage ist eingegangen — :business',
        'heading'  => 'Anfrage eingegangen',
        'greeting' => 'Hallo :name,',
        'body'     => 'Deine Buchung wartet auf Bestätigung. Wir informieren dich, sobald sie bestätigt wurde.',
        'footer'   => 'If you have any questions, please contact us.',
    ],

    'approval_confirmed' => [
        'subject'  => 'Deine Buchung wurde bestätigt — :business',
        'heading'  => 'Buchung bestätigt',
        'greeting' => 'Hallo :name,',
        'body'     => 'Deine Buchung wurde bestätigt.',
        'footer'   => 'Wenn du Änderungen vornehmen möchtest, kontaktiere uns bitte.',
    ],

    'reschedule_confirmation' => [
        'subject'  => 'Buchung umgebucht — :business',
        'heading'  => 'Buchung umgebucht',
        'greeting' => 'Hallo :name,',
        'body'     => 'Deine Buchung wurde auf einen neuen Termin verschoben.',
        'footer'   => 'Wenn du weitere Änderungen vornehmen möchtest, kontaktiere uns bitte.',
    ],

    'test' => [
        'subject' => ':app_name — SMTP-Test',
        'title'   => 'SMTP-Konfiguration bestätigt',
        'body'    => 'Diese Test-E-Mail bestätigt, dass deine SMTP-Einstellungen funktionieren.',
    ],

    'common' => [
        'date'       => 'Datum',
        'time'       => 'Uhrzeit',
        'service'    => 'Service',
        'staff'      => 'Mitarbeiter',
        'room'       => 'Raum',
        'check_in'   => 'Anreise',
        'check_out'  => 'Abreise',
        'guests'     => 'Gäste',
        'total'      => 'Gesamt',
        'regards'        => 'Viele Grüße,',
        'customer'       => 'Kunde',
        'manage_booking' => 'Buchung anzeigen oder verwalten',
        'powered_by'     => 'Bereitgestellt von :app_name',
    ],
];
