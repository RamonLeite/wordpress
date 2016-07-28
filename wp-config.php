<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'elrsi');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U/O]LL>@QG* L)j1E>Ff}U+}kP=&0!;#lY`1]~O30QW*Di]z?wA9wrv,RJdo;9&7');
define('SECURE_AUTH_KEY',  '#+.ia>8z<SfeY&6QmI}v}Z.,:qeb]?.c<ZsQ<M|!Y~Q)4Z+B:J}H)(pc3ZDa=!$U');
define('LOGGED_IN_KEY',    'kWKT3NXmYX}V+][}Au~UI+x^p%+I62_qu&(,S4(nx@a%s y``NP1Wy`-3Dj9sfXz');
define('NONCE_KEY',        '/]r:sd{Mb^Q]j~vAQfh:(EN->2^9<Wp?;cMb4s;T[|13(.L5h`6<?n.V93U5}rBB');
define('AUTH_SALT',        '%41%Wj2D>~Z<HwG`8@u6BMq,Q:b>>+1UW{_1lB8VDE?aEC#~9yUNN=sDzQhhUM_d');
define('SECURE_AUTH_SALT', 'cX>7uokE8+.hM2tDeG?W)@i8AK%L0R`bl.d;-1cQ#yuSk@B4(),}q3sYN#OdJ9UJ');
define('LOGGED_IN_SALT',   'i%DdFF>DWXYbdd@kg0fdclcAH#s.F,t<5)zx,F`-pHm!!FT9:C]w$mpq/8$85~&l');
define('NONCE_SALT',       '%LN:_/7X]sijf}o+NsXmu(EmIvq:>7$x=!8oT5VW,WS5 M=Oz]isiQcninEb>n-#');

/**#@-*/

define('FORCE_SSL_ADMIN', true);

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
