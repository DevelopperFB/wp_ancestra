<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ck1486_wpancestra');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'ck1486_admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '74123698547aqw');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%68Jx(]PS^j-9c|rb)?p]Qv .fR}kr~u+XI_1}L~Vl6CcV#c eGDxYnTuk@UtPj<');
define('SECURE_AUTH_KEY',  '@1N)+nBMy?m$ ?Em{ la^*srN]s{-w+munsGPGrD;T-cG/14%|]p| n;|.N/31hE');
define('LOGGED_IN_KEY',    'k(d%>p6ek Jlyf0/bv3S(vS4dD.-f|zG{;:s=ozqN*qEY5=iP7Q.5Vr,)O2S>7{V');
define('NONCE_KEY',        '}Y_hU-[E&{r2!8EH/FIpEU++MN1([9#d,s1e|U0/Y[!DSq_JA^-{sD>RY,W[Hbpg');
define('AUTH_SALT',        '1i/n(b7})Yfl+B0[]}I,4jETS|44{`@ol[%lq8mGXPkET&dpAT--rY2-Y;nggswN');
define('SECURE_AUTH_SALT', 'rI/]Z7Fz~LK1[uXUKKZ,(LDpws(Jh?*N3U}FE3t-:a^63yhvXpye~#NHqd*5&-$^');
define('LOGGED_IN_SALT',   'L7X,+VTnT_)/5++A$|(-VmX/<~}>@e ;mc._+KUQCgzU7_WdQ0358>YB&}k__J|P');
define('NONCE_SALT',       '3fyn[:g[pd3X$}| 29?ypX>,F:fowrpTG!Db1kk~kUN|1bhC#>&^4u68](i42[z^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');