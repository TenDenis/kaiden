<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3F1hxZ Gwb/,jZxCCA;$#}(VKA?d+snp<]3-j}7PDZ?:(q03FW(DGN8!G XQ$3!5' );
define( 'SECURE_AUTH_KEY',  'p<NEZRYt%CioslwI4--TBltIzP}t(gQH<.ssHFDR2_w#kPygpoC6N*G?xxw5v$^a' );
define( 'LOGGED_IN_KEY',    '11kN;i5<H($;Vpb6jhPd vNq-RH<rD<E|4/nDtKG@Pxhy}STj[G,6-<0y85O/p&`' );
define( 'NONCE_KEY',        '6gk6aKs.Y:OYIe(CU]%N(B4boJw27e$ ?%Z$BJ(62:pn,}jV^H/@`_!D.QecYZ@e' );
define( 'AUTH_SALT',        ')jr=[7=r!gaWdFL<Rep`4,au36Kb8>_`/=g-Zefw@(ep{mhIHQ*D:Bv$Rod(cB :' );
define( 'SECURE_AUTH_SALT', '|GM$3IZA?{[r{_?_[Re83cvhi9C?ZH{>DoZ.HR5DtHt$Z]]~*$PA%2$_(#<WnGJ.' );
define( 'LOGGED_IN_SALT',   'tDj;OX@/Z)L0$LDqzg,EvqSl*glehMe1G7Us2dVD&v};._Pqe,aco/4]!%$A4oZG' );
define( 'NONCE_SALT',       'SFa`O/&-%[b*^|q2?_MHKySC|jz=Q5ePt~9(3Z#$<@c!9^ysL6+RJkaRqIAu!~GI' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
