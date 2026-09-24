<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = array();
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
'ACP_VIGLINK_SETTINGS' => 'Налаштування VigLink',
'ACP_VIGLINK_SETTINGS_EXPLAIN' => 'VigLink - сторонній сервіс для монетизації посилань в повідомленнях користувачів, який ніяк не впливає на зовнішній вигляд форуму. Коли користувач переходить по зовнішньому посиланню на товар або послугу, щоб зробити покупку, продавець сплачує VigLink комісійний збір, частина якого буде переведена на користь проекту phpBB. Погоджуючись увімкнути розширення VigLink, ви підтримуєте проект phpBB, забезпечуючи його розвиток і фінансову безпеку.',
'ACP_VIGLINK_SETTINGS_CHANGE' => 'Можна в будь-який час змінити ці налаштування на сторінці "<a href="%1$s"> Налаштування VigLink</a>".',
'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Ви більше не будете переадресовані на цю сторінку, після того як оберете бажані опції і натисните кнопку \"Відправити\".',
'ACP_VIGLINK_ENABLE' => 'Увімкнути VigLink',
'ACP_VIGLINK_ENABLE_EXPLAIN' => 'Вмикає сервіси VigLink на форумі.',
'ACP_VIGLINK_EARNINGS' => 'Зробити запит про власну комісію (необов\'язково)',
'ACP_VIGLINK_EARNINGS_EXPLAIN' => 'Можна зробити запит про переказ комісії на свою адресу, створивши обліковий запис VigLink Convert.',
'ACP_VIGLINK_DISABLED_PHPBB' => 'Сервіси VigLink відключені проектом phpBB.',
'ACP_VIGLINK_CLAIM' => 'Зробити запит про власну комісію',
'ACP_VIGLINK_CLAIM_EXPLAIN' => 'Можна зробити запит про переказ комісії з посилань, монетизованими VigLink, на свою адресу, а не проекту phpBB. Для зміни налаштувань облікового запису, зареєструйтеся на "VigLink Convert", перейшовши за посиланням "Конвертувати обліковий запис".',
'ACP_VIGLINK_CONVERT_ACCOUNT' => 'Конвертувати обліковий запис',
'ACP_VIGLINK_NO_CONVERT_LINK' => 'Конвертація облікового запису VigLink недоступна.',
));
