<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'DEV_artemara');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Itka/JIm/6ia+QrIB~>M?*4YEU=cn4/UW]0&j<(4q3V*hkhSDp,Z^/L1f0Wry]#H');
define('SECURE_AUTH_KEY',  'F]xT+-X9$axgv3V:(D&[~OBZPrw:9i6hclz]}X)msY-7j,!3 CmuhWzsh[=U+(Q[');
define('LOGGED_IN_KEY',    '<-&I;U;DM o>~05Ihi_[,|*yn)p~ AP4cC8-V`4#qC=pnfR,?0/4TSqZ$w%2}I9%');
define('NONCE_KEY',        'S>J0gKK;ALWdDw4%@7(NSlCT/~Lf4&&:f9GIA/N1i5V3;$&!U4oK dQPb:Ru:n%g');
define('AUTH_SALT',        'DF@ZF4l;_?<$GDFAhQb05U:_!DucY<W^9LG )}&BXW%fmQ&r+p?h:aNYs7bI?!_;');
define('SECURE_AUTH_SALT', 'jhH|?n]NmqJCHo:8G[Yp! ciG-~<G?kIKzy~#O;(@BI!JM5W _5qQSV$fXuYEO$=');
define('LOGGED_IN_SALT',   '^K%Ff-%RF]~=4-b/_jw!W61 ;vD fU>!pv0?&|?~R_l$+M{x6?P.*w0P6/#6qQO$');
define('NONCE_SALT',       'p<R+K(Dg> LR=(AOlISpV&;~tHO V]QnKQR5f6~U?SiaQ8`thp)HD;(9}!3_5UZ-');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');