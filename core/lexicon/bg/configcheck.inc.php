<?php
/**
 * Config Check English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = 'Моля свържете се със системния администратор и го предупредете за това съобщение!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'Контекст настройките allow_tags_in_post са активирани в `mgr`';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'Контекстните настройки allow_tags_in_post са активирани в инсталацията извън mgr Контекста. MODX препоръчва тези настройки да са деактивирани, освен ако не е нужно изрично да се даде възможност на потребителите да предоставят MODX тагове, числови стойности, или HTML скрипт тагове чрез POST метода до форма във вашия сайт. Това трябва да е  забранено освен в  mgr Контекста.';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'Системните настройки allow_tags_in_post System Setting са активирани';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'Системната Настройка Allow_tags_in_post е активирана във Вашата инсталация. MODX препоръчва тази настройка да бъде забранена, освен ако нямате нужда изрично да позволявате на потребителите да предоставят MODX етикети, числови единици или HTML тагове посредством метода POST на формата на вашия сайт. По-добре е да я активирате чрез Контекст настройките за специфични Контексти.';
$_lang['configcheck_cache'] = 'Кеш директорията не е записваема';
$_lang['configcheck_cache_msg'] = 'MODX не може да записва в кеш директорията. MODX ще функционира както се очаква, но няма да се изпълни кеширане. За да разрешите това, направете /_cache/ директорията записваема.';
$_lang['configcheck_configinc'] = 'Конфигурационния файл все още е редактируем!';
$_lang['configcheck_configinc_msg'] = 'Вашият сайт е уязвим за хакери, които могат да нанесат много щети на сайта. Моля, направете си конфигурационния файл (config file) само за четене (read only)! Ако не сте администратор на сайта, моля свържете се със системния администратор и ги предупредете за това съобщение! Той се намира в [[+ path]]';
$_lang['configcheck_default_msg'] = 'Намерено е неопределено предупреждение. Което е странно.';
$_lang['configcheck_errorpage_unavailable'] = 'Страницата за Грешка на вашия сайт не е налична.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Това означава, че вашата страница за Грешка не е достъпна за обичайните уеб потребители или не съществува. Това може да доведе до рекурсивно цикъл състояние и до много грешки във вашия сайт регистър. Уверете се, че няма уеб потребителски групи присъединени към страницата.';
$_lang['configcheck_errorpage_unpublished'] = 'Страницата за Грешка (Error page) на вашия сайт не е публикувана или не съществува.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Това означава, че вашата страница за Грешка (Error page) е недостъпна за посетителите на сайта. Публикувайте страницата или се уверете, че е причислена към съществуващ документ в дървовидната структура на Вашия сайт в меню Система &gt; Системни Настройки.';
$_lang['configcheck_images'] = 'Директорията с изборажения не е записваема';
$_lang['configcheck_images_msg'] = 'Директорията с изображения не е записваема или не съществува. Това означава, че функциите на Мениджъра за Изображение в редактора няма да работят!';
$_lang['configcheck_installer'] = 'Инсталатора все още съществува';
$_lang['configcheck_installer_msg'] = 'Setup/ директорията съдържа инсталатора за MODX. Само си представете какво може да се случи ако зъл човек намери тази папка и изпълни инсталиращата програма! Те вероятно няма да отидат твърде далеч, тъй като ще трябва да въведат потребителска информация за базата данни, но е най-добре да премахнете тази папка от вашия сървър. Той се намира в: [[+ path]]';
$_lang['configcheck_lang_difference'] = 'Неправилен брой записи в езиков файл';
$_lang['configcheck_lang_difference_msg'] = 'Избраният език има различен брой записи от езика по подразбиране. Докато не е непременно голям проблем това може да означава, че езиковия файл трябва да бъде актуализиран.';
$_lang['configcheck_notok'] = 'Един или повече конфигурационни детайли не излезнаха OK: ';
$_lang['configcheck_ok'] = 'Проверката мина добре - няма предупреждения за докладване.';
$_lang['configcheck_phpversion'] = 'PHP version is outdated';
$_lang['configcheck_phpversion_msg'] = 'Your PHP version [[+phpversion]] is no longer maintained by the PHP developers, which means no security updates are available. It is also likely that MODX or an extra package now or in the near future will no longer support this version. Please update your environment at least to PHP [[+phprequired]] as soon as possible to secure your site.';
$_lang['configcheck_register_globals'] = 'register_globals е настроена на Включено (ON) във Вашия php.ini конфигурационен файл';
$_lang['configcheck_register_globals_msg'] = 'Тази конфигурация прави Вашия сайт много по-податлив на кръстосани сайт скриптови (XSS) атаки. Трябва да говорите с Вашия хостинг провайдър какво може да се направи, за да се изключи тази настройка.';
$_lang['configcheck_title'] = 'Проверка на Конфигурация';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Вашата Неоторизирана страница за сайта не е публикувана или не съществува.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Това означава, че вашата Неоторизирана страница не е достъпна за обичайните уеб потребители или не съществува. Това може да доведе до рекурсивно цикъл състояние и до много грешки във вашия сайт регистър. Уверете се, че няма уеб потребителски групи присъединени към страницата.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Неоторизираната страница, дефинирана в настройките за конфигурация на сайта не е публикувана.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Това означава, че вашата Неоторизиран страница е недостъпна за широката общественост. Публикувайте страницата или се уверете, че е причислена към съществуващ документ в дървовидната структура на Вашия сайт в меню Система &gt; Системни Настройки.';
$_lang['configcheck_warning'] = 'Предупреждение за конфигурация:';
$_lang['configcheck_what'] = 'Какво означава това?';