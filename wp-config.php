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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'awaete_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '0D%0&77AUm_7B<f}gyv6Tozt/EoD}Bd2GWqr-b3e73;J0,^uxQq W]N7 icU+#+Z');
define('SECURE_AUTH_KEY',  '7qi^K#=p8.qXt!s{K8rPc<CCc<v-k/S/nN0+RT8z!u]vDfA/J=`Flwh|p6!MFkSo');
define('LOGGED_IN_KEY',    '7*02_Zq}kJmf]o,N}i;TVNc^$*y;7Z@Oh>6>i8 ox^2N/w`<r],no<u^Ww(%f!Xx');
define('NONCE_KEY',        '12@K29Md~IPr}*oWAuAzERSn^fQS[>[(OyCp|9a(/jC.C *.Ct_f9[v%h4 >ImF|');
define('AUTH_SALT',        'F2Iru`83TzxYcE9k5XJ^QQpD$=E&u?4pJ0XRnQWJQpyn:mVs|x)!q9_@j}i3nvju');
define('SECURE_AUTH_SALT', 'yV[@e3:(*H 7A*u#l%z>Dk*2*fT{mwTxLNb-9~+^MKOB$96J<[_l:<h6OBiQ:xOT');
define('LOGGED_IN_SALT',   'IA$4x urV=oUv/g=F5+rDT*+&2KVeJ<w(lPy[)hL#1etcogk*9TC *aOsmU**Ta@');
define('NONCE_SALT',       'Hs[u!! e(aQT/&>BZ@n$-Q:^oka-am_#AJ(yf=$J&3Y|/{jm8E,S=_/,f3:pZpbv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'awaete_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
