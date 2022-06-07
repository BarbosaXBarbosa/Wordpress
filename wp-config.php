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
define( 'DB_NAME', 'aula4' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '12345678' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'G,Iv>?oq-e#r[D#6>L(JQEVP|3]83m?2Y5KH)fJf#JY$Y8Pw_a<|4o|s}f}ldZYY' );
define( 'SECURE_AUTH_KEY',  'O;W_`].V_8r9O0DV!rURrH4:a?G/,OY(Hs;fPI,)x8_Hj>C4Sv[]p]MoFCUjHwz,' );
define( 'LOGGED_IN_KEY',    '3}~r(OGzPs?]qOuU^)B{w}_7PO7.a[fc[Lk/lX`p85t44=ijf8[%~9W%ZM+FSB,f' );
define( 'NONCE_KEY',        'eRTH!~r1u,e_qEM%jWL&6gs|KK{(*<rn6(|{9;QCZ.FAmh.vCC8q5CB-7_?CU::F' );
define( 'AUTH_SALT',        'O2&v7*Y@RQ3GJI<Ly^sR?DoX,O(5::M>=KL,E(G 8`|j0f/wH*u/H04o#aIp$?_(' );
define( 'SECURE_AUTH_SALT', 'p1437|Xq:s/FmNRyF+T7D8agY-TfiVgmBRO.wBgXB$6i^c>K[M2/^G{?qvPpUnCm' );
define( 'LOGGED_IN_SALT',   'KCBk-T:lM@AtAZVhgylJ#xng_aW~@PtgZ>)jN@x]%tyT5na>88BA~4?H/jHqp;Cl' );
define( 'NONCE_SALT',       '*_[W5MrhUib*})eQEZi2NQx5@3(3+r~{zYqx>#P|opMdP<ZSBH6tOtOU3F.8b;$T' );

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
