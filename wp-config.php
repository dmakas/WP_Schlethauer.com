<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */
// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'k80754_schlethauer_db' );
/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'k80754_1234567' );
/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define( 'DB_PASSWORD', 'b97k5Gn^' );
/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define( 'DB_HOST', '10.35.47.85' );
/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );
/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');
/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rdw`@Z5u_7syy&LN!1]^eM~`WV2Oy,TSd#!}DjMN%haB >IucSE}JR/97n%f+Kg(' );
define( 'SECURE_AUTH_KEY',  '/=AH1XX[fZJnG1`-y@;q_iR@y9D30,2-p|H)hK6w^*v~j2?]b),e]*A5Z&QLuY6z' );
define( 'LOGGED_IN_KEY',    'I?[Dd>jcO*-!t-7@Y}mRVe~[Q;$K}(QoJa_LuIEvZJvto7{C$Jp37]3hmqdpc!XV' );
define( 'NONCE_KEY',        'wI,w;gn;/H4H,@{yu<!{k!ggE%JOYXH`>fwc H-zhE* spc07zuGjj^]Wgt*G|AX' );
define( 'AUTH_SALT',        '%!rhtj6WPh~]@CC|Ql`dI;L wga%,_mJ~2m4awKTIFA6HU~~%QU2G,Q^fV3:Vz6!' );
define( 'SECURE_AUTH_SALT', '2/{*C6m1(^4|1^iQLy{2GZ+3ctwgu-$L{+jK!8*Ja.(g<iJ9~PJ :*lCecR=b4@?' );
define( 'LOGGED_IN_SALT',   'D{irl8Q&g+I$nLB[rl^J[iAjn@F|KWmErOZF|%BZJQo$,*T~9odB8v-B|^]WEAu_' );
define( 'NONCE_SALT',       '@!jAt9V:7tZyWM>U}~}2r@L;&<_TpFD|C.bsd+,EA1Up^aE3@I%f&.:HlJK3iBDI' );
/**#@-*/
/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';
/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */
/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );