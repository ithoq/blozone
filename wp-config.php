<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'blozonewdp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'blozonewdp');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'TRyDgdcNMPFx');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql51-103.perso');

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
define('AUTH_KEY',         '4+mHp{/$J+>fD1e@65-v[6-YD6UZh-06]:IL$F~b}kD~vJPhs9_es9jpX`;}f3}%'); 
define('SECURE_AUTH_KEY',  'wlH#]9b:Y[Eq{4!S;VSs.$||R)5_2MOS)~x]y-e]DA1 7n5Qix+&!e)_Q,]o9+y/'); 
define('LOGGED_IN_KEY',    'm$7G|VK&[WVF7Xuv%+pXe#T0~8g?Exh.`?W)8q+Yt8_ETa!HM.nC[Cw.AN-:)8I1'); 
define('NONCE_KEY',        '9D~i(/ys,B[++p%=-r^BP^EJ 5}b V37MD9UKc2bf.@hhVO-q:2ATv+R4MGRl H`'); 
define('AUTH_SALT',        'IG[=vWC{*4vba2Yk*^p-;x={ELd89N#|X^KtD=xvZte$-@m.Cw j# (+h~WdF`k7'); 
define('SECURE_AUTH_SALT', 'yC,7NMK8`KH(u/H]wAPJxQG*nExZ}eS6?Y%n=C51Wu9y^LGz/lblncv_d/y%GwC&'); 
define('LOGGED_IN_SALT',   '4-g-lH@p.b//x8>3uy)eKq+s&x%D&Z}XSRuNTM(IpV,Y@kLx,f,!Dz^7o9N7i-yP'); 
define('NONCE_SALT',       'G*k?:Ba^-Kfbrdmv(#E(W<a*)QlpC;1{$se}D]BXZEs[?[z;!`194@uxqE @g-z)'); 
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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