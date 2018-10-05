<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '(14CI=1Gf_`=R9sJC$tN|A= In$HE.z`aB`kR&eEyq4_heYK%h`uwsnF<>/hwo,K');
define('SECURE_AUTH_KEY', ']y&<WfBmIJAuW A2o1Ii*%MXszM& zNf,wWv`Ob+Vdeq*ZY/-<~x$3k/>.,?A&@s');
define('LOGGED_IN_KEY', '2KP4wC|nBozK&eKvc]}9D[JKD{h*3O_8!dQhcQ2=S+YAAVzfEu8|9j}i(</Cx$,h');
define('NONCE_KEY', '}$3NsynJw7Za+|J#u%f&]+9+k?3B,1&^(hlR#tb:m#^y^{{^Yv+#oT$1w gf}UR:');
define('AUTH_SALT', 'q~Y*UP^%%SS{s`^+E;!0H> j2z;4svI}.mp/LA6q].>Qud3rhmuXNI7j3~oNVtup');
define('SECURE_AUTH_SALT', '_0koiJ`,/*]l!Q5{%:)Vi:{hgz1j=<s_A]j0&o$W+0/rqrq4GBqNhx}4,s%Q_W2u');
define('LOGGED_IN_SALT', 'N@bOw8_0T9{<kH~6U#DMXsT-sJ;GwEBp5yBn09/Hi?nIMv[rS$vv;b[>6[gRbZc&');
define('NONCE_SALT', 'AUcSp#}p8,.aJ5Bi]N<OqeU;k}E_%aPpKz-~ot229IfT@XVN[ G A2Hks>+{q]h_');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

