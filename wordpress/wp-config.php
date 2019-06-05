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
define( 'DB_NAME', 'evaluation03' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'evaluation03' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'evaluation03' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vO86J2@Y!20,w(IQ`<qHK-3#6jfUL^ZyZC_lDoo8Mqk_[nXnj*5+VU2mlle)$RJS' );
define( 'SECURE_AUTH_KEY',  '7`MkMT!P[s{EHeDBZBD)^<Sk;5~!_p@h@|A8&QIOB??jfkM1br3,gIL[QbF0dYG*' );
define( 'LOGGED_IN_KEY',    'ni=|nGhoZXGoF(a mSs2rxap.}Zqx5l>Yku#NHD3Ec^cWNG:6c9$>DCH}`)`7bj_' );
define( 'NONCE_KEY',        'hq^J[gWgrh[mP@b3/L+RN,WK$t[43[RX7kadLP<.;t9BEBkm+U5<=Tm_tL%X{09Z' );
define( 'AUTH_SALT',        '0#8UY/H8f),L_F+]gE6p4^EQAcxQ@ty:HYn2}KpuOdo8y>}o;rUD=N=fa?rC^?9`' );
define( 'SECURE_AUTH_SALT', 'NMb,pkWWT+@S35|6sfYfqEoc4NQkehs^3a3.T#)CEi@tN}lxar)i+{llZ2^@Gc~(' );
define( 'LOGGED_IN_SALT',   'B9K QNIa6iX9dL~CN^Q:%6g7=jp%fSr3M!3UVD^-(jbj2-_h<[i%7f~Ab9$Qg[<q' );
define( 'NONCE_SALT',       '86Kgnu%l2Y%wC7}D<:YYw@-GV4?+`_LvH#;&c|2!~#S6qPdO)26&rEYn!]Ol8Q3X' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'eval_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
