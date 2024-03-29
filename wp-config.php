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
define('DB_NAME', 'vdp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V3ZTw)kDoum&M}$QM@:F8Ion70;SFU5Xm?+6<=oeAq9Ilf)t6Tt&/mN5L;]=TyG[');
define('SECURE_AUTH_KEY',  'T{)9xxvGNU|,/#k#FccOsQCs!7%$x/:/ms^3]d^Ip~OM:A?05}gF+c|J`(Pd<iaQ');
define('LOGGED_IN_KEY',    'dJBE0>7!KuZPRGqA|Bk&LK+W#R<Z(ZlKc{zkKX@ER:mYlY;qc8W6CCN|{TL2cp|_');
define('NONCE_KEY',        'c ,Mkcd-un+w|IMW)b=:Hv00Gk,D5(e!A2*j^0kGVi[H[{-Th#e/(]@PEs|X2[7$');
define('AUTH_SALT',        '}rw,FRnOIqE!TbV[[}6_QDq:xoGQ=-]($d[!7uh*fq]$)w2>,TYGZ{MLE3zibj&4');
define('SECURE_AUTH_SALT', 'x5eo9Gf|dD9_5cF&E(E#M0XSIV6=59!f%;aCul@*VsxkN%55mnr3_#5+<iB!*.5!');
define('LOGGED_IN_SALT',   'zuH1#BD@0btF1zH>#Q{~N]R{}ZpPJ<WfqD=Hd#]L1KIO[RaG@I}^+(;Fla6K>m$F');
define('NONCE_SALT',       'pG2CT3S-kQzG{F7p-7q9W?WD~}BV(UkE+{)x$|/AZh2kfnPs?+W[F_JX ,h}E_9L');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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