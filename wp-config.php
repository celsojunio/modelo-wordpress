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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'credcarbon' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~3xm;a=|>pL[CU[cTLGUo.|n5`Be)ZZZTL+>ZN~#:^rHgN7Pl#D9hMACZ9|aOcYX' );
define( 'SECURE_AUTH_KEY',  '*BW@zawD,f^a&X7U5|/))S5[[#go)t#19EX!la pVXy8z]9_#r:lFi7~}$R%XsZ[' );
define( 'LOGGED_IN_KEY',    'UL;O9tq}Q.SG}w NJ_JzT>T=H;MK<Xkd}/$MN}ZZwT1^:E}!S~jj[_RFKidrX4}f' );
define( 'NONCE_KEY',        '!rO2}mIU)N=n96m+_JJW&=$tWGQSP4+i6Uc|MBP8Q_;,(k,8S(u-(BHUt-%DVQ7n' );
define( 'AUTH_SALT',        'E3EGlr)Jn<_^uI#5gc_apvB1,%18c>490];^i.BF^THo?B.9[w5t@_QiY)QB^}ux' );
define( 'SECURE_AUTH_SALT', 'e[s[*._+D!P;+$b5^lM,WFgT<*W~(DFj)?02h>fg$-m5pJO/!IW9n}fMQ1T_#PT*' );
define( 'LOGGED_IN_SALT',   '{*>Q39hICaR@#t7a5|UAb&kuM>EU8X6:)/n 7i*f^XC6<Qvdq@JU$opy`Op|~Oer' );
define( 'NONCE_SALT',       '4cE/q%S3~#igqv:1k#@jgKwt U~VFeU/o4[6v^V?wI(TSG*0C`L-tEoyVZtpw1r0' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
