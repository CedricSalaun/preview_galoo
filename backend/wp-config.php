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
define( 'DB_NAME', 'preview_galoo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Cedric' );

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
define( 'AUTH_KEY',         '%D-2E^^H2!Lq=I`f?=w2Y;Yh8e<BQs(+C+sJ`&f8cG1W8&$W&FOUKYwbhY0IGh2+' );
define( 'SECURE_AUTH_KEY',  '6rAvmi`C*PG:<f%IE$TF~r7N%L+I]+>Ba,sXn~n8bG}J&^pj$3QI3+6tZ}CY.A3i' );
define( 'LOGGED_IN_KEY',    '!5q#k0mf%$1rF35W)jXW?0nL9jr<#<<ioBS>wAqf5@!PmU,*>e?_b$Ri[sG?H`Zp' );
define( 'NONCE_KEY',        'jgYos=IP37Tdey*f4821/h6Mq/pw^KLhPCRT<#hIpQE_g?99yt-:Ao{|{,,xNAaD' );
define( 'AUTH_SALT',        '3A^kkyrfChVGAQy1*Qb A.C+EvemH3n=J#$iZ1fn8Xynl.cF7j$Uc(1`>}_7iig.' );
define( 'SECURE_AUTH_SALT', ']02Iz|*FePVB|FrC~0?.]:7{S}sZ+|E8h;-U>e91Lpz2}),Lit&V5SGTjpLYJ~-U' );
define( 'LOGGED_IN_SALT',   'E%,Ol&B9j^Oj9IhOAG3/OsznQkz^B*TVoe{+G*)G rI2R6%|PfIJ(|?,o/mbl]Wk' );
define( 'NONCE_SALT',       '~PZ^+e+3Jf5&&g?zUI*qCkgw={V;vC N=rL(21kp,&,Ox%%mv_]Ol/O0]Q:j^EI#' );
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
