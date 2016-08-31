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
define('DB_NAME', 'bdbd_tea');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '8Ht0r*)1T 8XMKd[6 KRH|hv:8H0-ll:px9wO/~?{K^szd9aIB2eGSuw(8R1cNMy');
define('SECURE_AUTH_KEY',  's!}JC}[YR<`9S:9/>h:Eykw7TwO]6G0tzJmb}lUxUA/.[MXJZ3m:o s5kXK#0Sqm');
define('LOGGED_IN_KEY',    'R1&9{10mOPzis9 *n9-r>ul)nXvm&PVG2_M/3(n?A%!fQ^6Bl0[ux#>3Uy7dI*=r');
define('NONCE_KEY',        'U!jI@m2DYE.Wl~&2&.pnRvSaM(x^UyV~Htj%S=V[rRJ6~+ve/#j$Up= gs;%>+py');
define('AUTH_SALT',        'ENkv6X%H&jYrFV.s^ud7=<yYmHs3ctJ&?R*d0k!Eta%.4gGL-HO8<+[<Uc5=kQ[>');
define('SECURE_AUTH_SALT', 'Ww4^sJKaDZ+hYst&BVi4JQC>i&]0b{2+ylhhWfCR>6ymBKQR(r|UI^q-^5MF$6zv');
define('LOGGED_IN_SALT',   'Kyul/slDdy@35*p#)B;*x$h5<Im}qcs^P!rV8mje2vnl1PntsKuPg`:+tlM(&<CS');
define('NONCE_SALT',       'e(.LAih%0gPKd`nB*3Z:9<I}0[=o.{-M#3d[|H|,#UEEou `q7i789,~l{arm8b9');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ti_vvp_';

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
