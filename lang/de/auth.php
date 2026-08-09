<?php

declare(strict_types=1);

/**
 * Deutsche Übersetzungen: Authentifizierung.
 */
return [
    'page_title'          => 'Anmeldung — :app_name',
    'meta_description'    => ':app_name Administrator-Anmeldung',
    'hero_name'           => 'VoxelBooking',
    'hero_sub'            => 'Termin- und Buchungsplattform',
    'login_heading'       => 'Bei deinem Konto anmelden',
    'email_label'         => 'E-Mail-Adresse',
    'email_placeholder'   => 'operator@beispiel.de',
    'password_label'      => 'Passwort',
    'password_placeholder'=> '••••••••',
    'login_button'        => 'Anmelden',
    'logging_in'          => 'Anmeldung läuft…',
    'logout_button'       => 'Abmelden',
    'invalid_credentials' => 'Ungültige E-Mail-Adresse oder falsches Passwort.',
    'rate_limited'        => 'Zu viele Anmeldeversuche. Bitte versuche es später erneut.',
    'session_expired'     => 'Deine Sitzung ist abgelaufen. Bitte melde dich erneut an.',
    'footer'              => 'Bereitgestellt von :app_name',
    'remember_me'         => 'Angemeldet bleiben',
    'toggle_theme'        => 'Darstellung wechseln',

    // Method selector
    'tab_password'        => 'Passwort',
    'tab_otp'             => 'Anmeldecode',
    'tab_magic_link'      => 'Magic Link',
    'send_code_button'    => 'Anmeldecode senden',
    'send_link_button'    => 'Anmeldelink per E-Mail senden',
    'check_email'         => 'Prüfe dein E-Mail-Postfach auf den Anmeldelink.',
    'enter_code_heading'  => 'Anmeldecode eingeben',
    'enter_code_sub'      => 'Wir haben einen 6-stelligen Code an :email gesendet.',
    'verify_button'       => 'Bestätigen',
    'resend_code'         => 'Code erneut senden',
    'back_to_login'       => 'Zurück zur Anmeldung',
    'code_invalid'        => 'Der Code ist ungültig oder abgelaufen. Bitte versuche es erneut.',
    'link_invalid'        => 'Der Link ist ungültig oder abgelaufen. Bitte fordere einen neuen an.',
    'code_sent'           => 'Der Anmeldecode wurde versendet. Bitte prüfe dein E-Mail-Postfach.',
    'send_failed'         => 'Die Anmelde-E-Mail konnte nicht versendet werden. Bitte versuche es erneut oder melde dich mit Passwort an.',
    'passwordless_unavailable' => 'Passwortlose Anmeldung ist nicht verfügbar. Der E-Mail-Versand ist nicht eingerichtet.',

    // OTP email
    'otp_email_subject'   => 'Dein Anmeldecode — :app_name',
    'otp_email_body'      => 'Dein Anmeldecode lautet:',
    'otp_email_expiry'    => 'Dieser Code ist 10 Minuten gültig.',
    'otp_email_ignore'    => 'Falls du diese Anmeldung nicht angefordert hast, kannst du diese E-Mail ignorieren.',

    // Magic-link email
    'magic_link_email_subject' => 'Bei :app_name anmelden',
    'magic_link_email_body'    => 'Klicke auf den folgenden Link, um dich anzumelden:',
    'magic_link_email_cta'     => 'Bei :app_name anmelden',
    'magic_link_email_expiry'  => 'Dieser Link ist 15 Minuten gültig und kann nur einmal verwendet werden.',
    'magic_link_email_ignore'  => 'Falls du diese Anmeldung nicht angefordert hast, kannst du diese E-Mail ignorieren.',

    // Password reset
    'forgot_password_link'     => 'Passwort vergessen?',
    'forgot_password_heading'  => 'Passwort zurücksetzen',
    'forgot_password_sub'      => 'Gib deine E-Mail-Adresse ein. Wir senden dir einen Link zum Zurücksetzen.',
    'forgot_password_button'   => 'Link zum Zurücksetzen senden',
    'forgot_password_sent'     => 'Falls ein Konto mit dieser E-Mail-Adresse existiert, wurde ein Link zum Zurücksetzen versendet.',
    'forgot_password_page'     => 'Passwort vergessen — :app_name',
    'reset_password_heading'   => 'Neues Passwort festlegen',
    'reset_password_button'    => 'Passwort zurücksetzen',
    'reset_password_success'   => 'Dein Passwort wurde erfolgreich zurückgesetzt. Du kannst dich jetzt anmelden.',
    'reset_token_invalid'      => 'Der Link zum Zurücksetzen ist ungültig oder abgelaufen. Bitte fordere einen neuen an.',
    'reset_password_label'     => 'Neues Passwort',
    'reset_confirm_label'      => 'Passwort bestätigen',
    'reset_password_mismatch'  => 'Die Passwörter stimmen nicht überein.',
    'reset_password_too_short' => 'Das Passwort muss mindestens 8 Zeichen lang sein.',
    'reset_password_page'      => 'Passwort zurücksetzen — :app_name',

    // Password reset email
    'reset_email_subject'      => 'Passwort zurücksetzen — :app_name',
    'reset_email_body'         => 'Klicke auf den folgenden Link, um dein Passwort zurückzusetzen:',
    'reset_email_cta'          => 'Passwort zurücksetzen',
    'reset_email_expiry'       => 'Dieser Link ist 60 Minuten gültig und kann nur einmal verwendet werden.',
    'reset_email_ignore'       => 'Falls du dies nicht angefordert hast, kannst du diese E-Mail ignorieren.',
];
