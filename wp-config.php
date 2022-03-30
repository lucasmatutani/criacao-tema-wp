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
define( 'DB_NAME', 'wordpress_teste' );

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
define( 'AUTH_KEY',         'k]3+~&kqnP$C7n#B* U<J6)=g>6q.v=,Cmh$%OMK.iz#_)bPobu@b`<tGW9vpssM' );
define( 'SECURE_AUTH_KEY',  'd1io>F`/y*#XaaQ )7,v{-)C7S3Mc|!b9Ijm;0xS{Fqx[8{RIrn3M4Byjwuk^W{A' );
define( 'LOGGED_IN_KEY',    'TY1UaVnwLL+-!%K65{H4FS3,{,34%zRHQ>yZ]FvjrPVw jc> Q9G wrg9@_[ZqR4' );
define( 'NONCE_KEY',        '3*9n~JJJ,$B)LIe0{5tHE0{20!uAckW4AT@N;GY<k)y2q]jH,i*qryi{cNp^3ykl' );
define( 'AUTH_SALT',        'H 912#_@cw-9arV8)KGQ>/3<TDye1Dtb?,znw5zr37HCIyqzBE#}3b=.lRFtx&:5' );
define( 'SECURE_AUTH_SALT', ']0M$U@awDcs0h.X&t;eFi2q<}8sEoLNx|F#T|h)=,q~IS8<aP!lYjMh#;_T#{64m' );
define( 'LOGGED_IN_SALT',   '9+rT&ZdImbv2s;~|V*6BOkW$$0`_JyRcrQr_RmuqmO)LVz`t@9ElxcF>p)Nd+$i8' );
define( 'NONCE_SALT',       ';*Y/Rvl?NLR&f*A%*^W.9/sRUSyg|Xm{bt (enf?o&(eH{a Ql413@O[3%5v|~>9' );

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
