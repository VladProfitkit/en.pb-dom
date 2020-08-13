<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u0141008_en');

/** Имя пользователя MySQL */
define('DB_USER', 'u0141008_en');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'N6k2B4r2');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QQ)uPKpZL?#m4{|RY!S#O+(fcx,#<O9i4?atI.Hk|j`oC%X[od]|+=&GC#9,co1/');
define('SECURE_AUTH_KEY',  '}o<| 1x=%!Ie@V{.A2f,>!w&2H@mTsbWs9.SOm&~/8MU]eKt:xK~|.UrTFn d}K~');
define('LOGGED_IN_KEY',    'EAv|T&eD|Ef.)Y&L,r+5V5~ekHJf~ FqJ#.tpdXH*8rcr -/+c[p:vc#k3El-Z07');
define('NONCE_KEY',        'S-m4@E4QP6~H~T0E-,@$;XG/fk~(BS8-{a-y{${iBK]Lzn{|U2dAODYf[^ XA4qW');
define('AUTH_SALT',        '#|0ZlS7]&gx;;2X{-tqK|_vJKMq_#X(Kv@%F+]V+MF#4h+|bL>!z}&ODcca5eXT-');
define('SECURE_AUTH_SALT', '&[}~02`;<^~!>`_>t3dGH#A,<G1OK}r($J!v8>~]89jS%.Z=9cxt.9C|OB5>VwC[');
define('LOGGED_IN_SALT',   'flT+.mWJhIeo45i!Eql:ohM`3X7]&_wK=j!|wOh6hC7KnbB=w9hP+-+[?L.+owqA');
define('NONCE_SALT',       'e/nZ$nMB:os7G@BsE,s#q{7Gm|@)aX$LhkI-3gkaiXFux#+m0@C[j[v-Gi q_};-');

/**#@-*/

define ('WP_HOME','https://en.pb-dom.ru');

define ('WP_SITEURL','https://en.pb-dom.ru');


/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
