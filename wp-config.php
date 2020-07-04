<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'pacificmall' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'pacificmall' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'pacificmall' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X7}R~|SvkvNv(3dhvm[sxX%O/HlZ2m^9=YE;00syBMI3fb34~B6t68)Q?l^zLZpa' );
define( 'SECURE_AUTH_KEY',  'D:ml@#{&Y~F~0:%;RhGq7A5!%RIJrhR:d+$tyL|m3FV?S@_}RPCA<[__@f:s*2k8' );
define( 'LOGGED_IN_KEY',    'I[Y(XQiXt]&Qx)3xbLZ}bwhd@Z`O|_d:;;iWkRmi&{N1nI(G]xWD^t|vJDR3^)}h' );
define( 'NONCE_KEY',        ' yq+ptg?T4W>h~j  x*D`alUI3CsqIyu%2mD?y[OgE%-j>qNuker~J3v[YN2(:FQ' );
define( 'AUTH_SALT',        ';Zx9FiY<|QnWErQpoa<6X>: s+{#_3&rlKKJ37b`hJgVISwo-P@4U3[o,$:I@g4&' );
define( 'SECURE_AUTH_SALT', '4yZd2)M]#Ic#WtHAiO0ff!WR2_^Yka~@YQ.|2Qul#gw:kZ3]+<:KPW_]lbCf`LZC' );
define( 'LOGGED_IN_SALT',   'jhMU?4%J=uh!{>[Xa(Vph%pc(i<)1&(@T_j=SYA@?6s]BWgVJ&Y0#eH5mzf)TX`B' );
define( 'NONCE_SALT',       's&<52/`)1@Yq_{wav/{gIwD-HeQwzYEI<IAAQqNrX(27uf3kierg47mP=yJ28(q/' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

#define('WP_ALLOW_MULTISITE', true);
#define('FORCE_SSL_ADMIN', true);
#define('WP_CACHE', true);

define('FS_METHOD', 'ftpsockets');
define('FTP_HOST', 'localhost');
define('FTP_USER', 'kusanagi');
#define('FTP_PASS', '*****');

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
