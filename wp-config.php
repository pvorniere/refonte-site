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
define( 'DB_NAME', 'refonte-site-pv' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'LiS,9-0$nG6F :TN$FcwIO$@DI ;FUuz*t!!$J>&2cOu)K=?tstwzP4R0MK%wK(O' );
define( 'SECURE_AUTH_KEY',  'RCri@p])L5HDcf+~+tH5kjo#}o1434d>cCfesy?|GcK.Qnq|q)sJjV$XoH^R=k1q' );
define( 'LOGGED_IN_KEY',    'QBu<$-1YUL)v`=k*{[WlPV(s|fcQ>B7 :5OR8EiSlI|dUBYp4/Z!F>%J_T~Q.~8f' );
define( 'NONCE_KEY',        'R;6<)[&.zWe:)BxPg17xlF>CrbXupPi)ip;rqp~uI]d.thtC0;X(uX]p5Chl~|8&' );
define( 'AUTH_SALT',        'IPB6]2aq1&EaUBPdz-R{C~<GNVsgdWF&vZ:;hQ7>@gM7UycW>wS)b;pi #WhU4!/' );
define( 'SECURE_AUTH_SALT', 'j}2&)P@hiD[uaHk]%4hR<yX/kJJv@F#X]=P*[_{ZF6Ye}N[d(rdJi36;:0GAs%xO' );
define( 'LOGGED_IN_SALT',   'Q4x{J`Y_MfSj]|`xj0+_#rN<M%SocJJ3h-1{fxZPZNURB76@ovq?)3f@9v@}J}Wt' );
define( 'NONCE_SALT',       '78YCJAvi_>/m=#$,w4H`=^g#XPv-t$</OSbS%7~;hvu26}(?J!410ZA$5~6[8D)V' );
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
