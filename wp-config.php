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
define( 'DB_NAME', 'dekor' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dk.WJxsx)Ykdgk3r +9<|2xdBz`o+3oI]@DYA%?Ey+WZZ-fiHJun`.0%_-uO9)vn' );
define( 'SECURE_AUTH_KEY',  'y4r?x<w4l~( ooSTFTTI>!254//D<5|){n`1Ql{W8!gjsn^:W)4$.VI`Vta{4O0?' );
define( 'LOGGED_IN_KEY',    'K_2!Wu&S ~:O{aK+<Amt*}u0Z6$@~Ke2ObjdeISJ&apK%.HK5<0mL7F)J1HEQwj8' );
define( 'NONCE_KEY',        'lAL{J8i=MLOj8 ?Na{ j[ce.0DLuG%=FIgMV]YN:E|?l^u<4)`:LVx$Rn]c)GX;/' );
define( 'AUTH_SALT',        'm84IgEYoo2A=7-%E/InRc@!MJ~/Ur{Wii[tj!ezStdbcq}f8d=LqI!sj:T(a,hM`' );
define( 'SECURE_AUTH_SALT', '-ljR&sL9KD:c HqICalSKICwU8__hKu98BpH:fWp:Q/NDgN%sbsF?~]LK=mh}UVL' );
define( 'LOGGED_IN_SALT',   '${V/|YSwl3KN3Pjed)fQb[XIs>9qboQ]^,][^pAS{9Qw5s(wR4FQv(,eTjU64CY:' );
define( 'NONCE_SALT',       ':qFbxF;Wg*menowpRp_9FToV%3!rbbX+^_w-IR81%@T{j4M^R#]~rRo2a8ptOg+`' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
