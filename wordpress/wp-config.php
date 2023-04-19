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
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '12345678Test' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '|-<,owe-LZP+VYe|o9vU?7M~;&)^Jm[^bp1hP*;+9`pGu-<?-vQqGo?tAX0vSnD>' );
define( 'SECURE_AUTH_KEY',  'kfQ$5S~w%zI1tw}4zUnCOV1jXd#^DDAJ:1OdIXXs^ ER||VdPvv?WE*?Z*_70~;`' );
define( 'LOGGED_IN_KEY',    '$9zQ_`*+ri&[W[G-m-3TWdJZE[Kowl@<Bq<c4?;6 E^N`vBvXRLX2S!*0AH&(Pt[' );
define( 'NONCE_KEY',        'rCm b-JY1lueYB~=R]lp%8c%}3=UY)( oD(;}h4nmT_YQyWyzQBG:CmaQYqQujK^' );
define( 'AUTH_SALT',        'iwvF=73#}T W/_;*YUo.PcqAOXGShKlGrqkP,i!(fN:Rw:A0+0ri.8 mn!>&h)+N' );
define( 'SECURE_AUTH_SALT', '^+&f!n1g/+s>{w<Q l_I2lPCAJTY!B1[zb~:z,$lfL7OHhHZO%kw!-9cE}r,c_K0' );
define( 'LOGGED_IN_SALT',   'Iur{Fb>=YCyX,SzdJF=Fw:hhW8PGv{2(#*86)ItFNQK&zRGk7UQDI%[r^vZtTmwZ' );
define( 'NONCE_SALT',       '/J/|%OF~dC1uOsvKF`a6Sl_zfY~CLlSnCG!`/zoh)mTaGiMe_piN>0,IV7|1gynW' );

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
