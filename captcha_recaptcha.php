<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'RECAPTCHA_LANG'				=> 'uk', // Find the language/country code on https://developers.google.com/recaptcha/docs/language - If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_NOT_AVAILABLE' => 'Для використання reCaptcha необхідно створити обліковий запис на сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA' => 'reCaptcha',
	'RECAPTCHA_INCORRECT' => 'Наведене вами рішення невірне',
	'RECAPTCHA_NOSCRIPT' => 'Увімкніть JavaScript в браузері, для того, щоб завантажити завдання проти спам-ботів.',
	'RECAPTCHA_PUBLIC' => 'Ключ сайту (Site key)',
	'RECAPTCHA_PUBLIC_EXPLAIN' => 'Ваш ключ сайту reCaptcha. Ключі можна отримати на сайті <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Використовуйте версію reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_PRIVATE' => 'Секретний ключ',
	'RECAPTCHA_PRIVATE_EXPLAIN' => 'Ваш секретний ключ reCaptcha. Ключі можна отримати на сайті <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Використовуйте версію reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_INVISIBLE'			=> 'Цей тип CAPTCHA є невидимим. Для перевірки його працездатності, в правому нижньому кутку повинен з\'явитись маленький значок.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Ви перевищили максимально допустиму кількість спроб входу.<br>Тепер, у доповлення до імені користувача та паролю, при аутентифікації, буде використана невидима reCAPTCHA v3.',

	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Ключ reCaptcha вашого сайту. Ключі можна отримати на сайті <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Використовуйте версію reCAPTCHA v3.',

	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Ваш приватний ключ reCaptcha. Ключі можна отримати на сайті <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Використовуйте версію reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Домен',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Домен, з якого буде завантажений скрипт для перевірки запиту.<br>Якщо <samp>google.com</samp> недоступний, використовуйте <samp>recaptcha.net</samp>.',

	'RECAPTCHA_V3_METHOD'				=> 'Метод',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Метод, який буде використаний для перевірки запиту.<br>Якщо вибір недоступний, даний метод не може бути використаний для цієї конференції.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Поріг за замовчуванням',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Поріг за замовчуванням використовується, коли інші пороги незастосовні.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Поріг при вході',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Поріг при відправці повідомлень',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Поріг при реєстрації',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Поріг під час скарги',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Пороги',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 повертає оцінку (<samp>1.0</samp> — найбільш ймовірно викликає довіру користувач, <samp>0.0</samp> — найбільш ймовірно бот). Тут можна налаштувати мінімальну оцінку (поріг) для кожного випадку використання reCAPTCHA v3.',
 	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'Для коректної роботи reCAPTCHA v3 обов\'язкова наявність інформації про використаний метод для перевірки запиту.',

]);
