<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_nishikigoi' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'phpMyAdmi' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1-%_1tmiw b7iS]dK4^dC95rto+ G[B1wUw+0C3v^4h;,u;%,R/l_Ul!6)0dDkX!');
define('SECURE_AUTH_KEY',  'M`>_+j@V9ijCmLADxp15C@tgMb}x7X!ojFRtI`zj&=kEUvktqF<v+r]9o01m$^6P');
define('LOGGED_IN_KEY',    '(A({xQ$UrD8SvS53djWUu7O&J_2+-r]Vae?.+hSiTU-UIx7Tqx.#T5-)_GCrD;F~');
define('NONCE_KEY',        '?)GL0BbJX1hrV%auPq:X,SPt+T;LU?8e(?<tg<769a}q[%,CwO=Q-rJa(07o[NR4');
define('AUTH_SALT',        'E Js5m8BX=J?!j|-}.q]CPZp:HsK?swUP^7LZG~fQU$dgZuvkf3dq@iLf%Y<yRb^');
define('SECURE_AUTH_SALT', 'qfmnpMhJZQ?shhx;-[jXO:f<wT-s/tia7-[(/Upu4r0KSphN6FHI=FW?g5LbFZU1');
define('LOGGED_IN_SALT',   ']<ERc&Q=c (^=8)uilU)rj0Y5F$w^Y+[$~yvesDX.Zvx3wWbGXS(F%eQReZET:wI');
define('NONCE_SALT',       '!db~%0z+c:mB^P$h>xo+el]!j+m}3H[E&qQdVJk`}i;A,XKJ$c@U&-DA*1}N4:Y/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');