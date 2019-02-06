<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'refuge');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UP7{n=esK/(j_7HIftyo`:CimKVfWUOBMc1WQNIgKdw/{x[.<lp+76n+<E7Ih[> ');
define('SECURE_AUTH_KEY',  'HgrPwd/|u5r@&;iZ2}r,~[AgZ^YV9PBls4cUErfYwPj=d<7ua2]lT#J01Yds/:*;');
define('LOGGED_IN_KEY',    'G6a5GbM^? !n~7<3Fl{~]:yyW|@VD20V>gN_2>/)m_[#PDs:<g&fk!*v]/<DxN^m');
define('NONCE_KEY',        'hoIWTb;3jH~}+]+U;KH9F-#?A[<D~9`Lx},LHJ74/@5hBt&9;Z[(,{GYX/,%9Mk_');
define('AUTH_SALT',        'mpyg!7H+g?`I1CB#{>QHkQmzCD{cvk41`n_cuTQW8hXU)S u5L;1kEDe4Qe^.QbS');
define('SECURE_AUTH_SALT', 'H=J~SI,t=I{oU`YivWXjCOFIOny.~%+(%zs+mZ?2UbAKu;6|G=-hyX4v3W?F[1GM');
define('LOGGED_IN_SALT',   '][3@X{][BQF8q6x}K{rx]V4E=1hunK4V.aO>1Mn/P]NWJ2qL7uV<BNPP)kn}AG+1');
define('NONCE_SALT',       'zZ;zC%zFn6|PuULaG-Q~{BfimTs*I)fhd&L=uYh`[;A?-M|,C|pjwc0eSK!U5N<n');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');