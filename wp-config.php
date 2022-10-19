<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'password' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mB? rg+v)>`h~ +3CizSxc.i+g;KK}&D,U98aOgRK63,ePsXN4>:$`%{}svqcE8z' );
define( 'SECURE_AUTH_KEY',  'a1pL$&}~jRZ9i*3f.0z2#y9p.v}sw_]wCxvj#%!|PY03o8z=;$Bpi6u4l(yZ%7WT' );
define( 'LOGGED_IN_KEY',    'eRb|_KD:be+0,[cr6c@,.9;RsKpeL*AqT& [Wq} l^tXgdaO%TW#T XKxwfN!hP7' );
define( 'NONCE_KEY',        'eN/2m0;4s4:;149:RW4TUU+)CI*-LDw_NWNuJ7[UR?+baA!nJg&A(JQeuk#TX&]C' );
define( 'AUTH_SALT',        'K#`e;P0pnsGi@(M%E^su$[_kcmbKaL+my%4<Ha0GZ89/*sWCifhSBwjlWhsee&t-' );
define( 'SECURE_AUTH_SALT', 'b8;O<u8AN1_m6NftM{W_dN?V y5b0e]Z~Aau:.i{X+e[8+=O~.qQ{J;cjYLBF36m' );
define( 'LOGGED_IN_SALT',   'j5w5P&SG{4D+V}pg02s*HCW[JgmTcn%Ck]-Cd_YgaUfl4~Hx2s{16 (MgWZ&{4S`' );
define( 'NONCE_SALT',       'T<3V385sXz.Mjs0!_Do E1;vsF&qEWPrBX::G,Sc6hIqsMIIdfdWGBdez[s_F2,!' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_table';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
