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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'jOIIVnfx[6bjfA1L' );

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
define( 'AUTH_KEY',         'W-o&R?jkF>,ck{vtN/cjiY[MI5)mnI)V3%UXdM-tQ*u.@9IC&KZ{wQkVn#eCk.S#' );
define( 'SECURE_AUTH_KEY',  '8=dpQUSq|i:Y|z$y7`N[iAd.9$7:(Pfck~y4#oYWf`gu)J4)w&)NR%W&zzFU`eXA' );
define( 'LOGGED_IN_KEY',    'qV4#93BGHs_z[zQ):DReCK#6l/JQLxh5@%*E+b)la5:(yB`$Ew,66dRC(_sul1Fc' );
define( 'NONCE_KEY',        '~yfq*VQLWbl`0FS4BG;*S+FjqoQDY,:M?Go(K:oi_fnfx%hj}?0`f5Q %yml1uDl' );
define( 'AUTH_SALT',        '=qFn[efiK83xe%q[Z]eK+T!t{AEa$(MM<t&6B_`e<!Q6{p{W*[tCJ?!wtEs30f=U' );
define( 'SECURE_AUTH_SALT', '#muS%3_.k`GGDm~uhWnvpE=44v4beO![=Uui >wZ{f/aAUXB`deZz_Zsw.RDq6UQ' );
define( 'LOGGED_IN_SALT',   '#pH!cF|opjQqM!qgWW0SG3Ux:2RuZ5^00_4e,A2f.aq#Gs{r99x@A}(E2Tz&Wbw5' );
define( 'NONCE_SALT',       'd-5s;aS`/_o[>xk3hK!!Q;*+MMck6i$1f^LJ$O$iN2/)Odey%=%oKK;D/|J^]uy8' );
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
