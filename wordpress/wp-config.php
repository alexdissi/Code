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
define( 'DB_NAME', 'wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '97*^r%q#^2xVR6^5z7A8878$YtMJ4V7cM$f' );

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
define( 'AUTH_KEY',         '|^-3$vBkl[;su[NsKh^&A-Y$f>Z  Yn|@#m6_(e`DTlcwz$HyyJ(.`9>#(}ZpJ9Q' );
define( 'SECURE_AUTH_KEY',  'K/Fa:a6d|;z+3psVnU`4M^(:`]?Wn4Z[!:NCdbam+A[5yA}%5&YyZj67SO58Dij#' );
define( 'LOGGED_IN_KEY',    'ErG6,sPVQWTSoT;*ZlV#< 0j%:GytI;?C&qd|%*ylE]&<`YV3:f9@KNn3,[V.czp' );
define( 'NONCE_KEY',        'sJ}B+ux8>pK8yM;#J~lR9KZle@dG|`1g?NjjJV_yqFM1LTin2BKon][9d:oUsV<-' );
define( 'AUTH_SALT',        '5$r*%Yw(@fLTI=gb@n!aoJUrj9$G}13!KI7!Kjr/<7:?@au/%w8tb^~AxNkp{,TN' );
define( 'SECURE_AUTH_SALT', '%HT!SUEI m<:05gYxE%*KPUgxi,K|{$5rI_&5*zRthuBlef7ry{X)`Rrz}!YNfpN' );
define( 'LOGGED_IN_SALT',   'hxxE_-Ldy[+#[ven{7+2e[!_RqWo?=Um5k^H=S;&>0LDW8^AwizXqEHST~*a?nGr' );
define( 'NONCE_SALT',       '(CpZ|e(Pj0{#Ffm6DF-#ky6+nQf5P4$ty%Z]&:=qg-bK(zzr=6a+IzQ#|FsbE}tl' );
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
