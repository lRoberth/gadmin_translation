<?php
// THIS USES THE BASIC PHP VARIABLE SYNTAX. PLEASE DON'T WRITE ANYTHING OUTSIDE THE "". IF YOU'RE GOING TO USE THE " CHAR INSIDE A STRING,
// BE SURE TO PUT A \ CHAR BEFORE THE ", FOR EXAMPLE: Press the \"Submit\" button.
// THESE WILL BREAK THE SYSTEM:
// Press the "Submit" button.
// Press the "\Submit"\ button.
// Press the \"Submit" button.
// Press the "Submit\" button.
// THE RIGHT WAY IS ONLY THIS ONE:
// Press the \"Submit\" button.
// \" This \" Will Not \" Break \"\" Anything \"\"\"
// HOPE YOU UNDERSTAND IT.
// YOU CAN ACTUALLY SEE A LIVE EXAMPLE AT LINE 48.
// THANK YOU FOR HELPING ME TRANSLATING THIS SCRIPT TO OTHER LANGUAGES.
 
$lang['email_invalid'] = "Введенный вами адрес электронной почты неверный";
$lang['not_image'] = "Этот файл не изображение";
$lang['img_large'] = "Файл изображения слишком большой";
$lang['types_allowed'] = "К сожалению, разрешены только файлы JPG, JPEG, PNG и GIF.";
$lang['file_not_uploaded'] = "К сожалению, ваш файл не был загружен.";
$lang['problem_uploading'] = "Извините, возникла ошибка при загрузке вашего файла";
$lang['staff_applications'] = "Заявки для персонала";
$lang['button_login'] = "Нажмите на кнопку чтобы авторизоваться!";
$lang['script'] = "Скрипт";
$lang['exploiting'] = "Использование попытки";
$lang['pending'] = "Ваша заявка на рассмотрении ...";
$lang['accepted'] = "Ваша заявка одобрена...";
$lang['already_admin'] = "Вы уже администратор";
$lang['report_to'] = "Отчёт";
$lang['denied'] = "Отказано ...";
$lang['apply_now'] = "Подать заявку!";
$lang['apply'] = "Подать";
$lang['playtime'] = "Скриншот вашего общего количества часов:";
$lang['warnsp'] = "Снимок ваших предупреждений";
$lang['email'] = "Эл. адрес:";
$lang['specify_email'] = "Укажите свой адрес электронной почты";
$lang['submit'] = "Отправить";
$lang['cancel'] = "Отмена";
$lang['submit_applies'] = "Зявки на рассмотрение";
$lang['weird_stuff_report'] = "Что-то странное происходит, пожалуйста, сообщите об этом";
$lang['watch_application'] = "Рассмотреть заявку";
$lang['error'] = "Ошибка";
$lang['not_found'] = "Извините, страница не найдена";
$lang['if_not'] = "Если вас не перенаправило автоматически, нажмите сюда";
$lang['here'] = "Здесь";
$lang['admin_p'] = "Админ панель";
$lang['change_questions'] = "Изменить вопросы";
$lang['quest_desc'] = "Здесь вы можете изменить свои вопросы, не забудьте нажать «Принять» в самом низу.";
$lang['quest'] = "Вопрос";
$lang['manage_admins'] = "Управление администраторами";
$lang['manage_admins_desc'] = "Обратите внимание, что любой администратор, указанный здесь, будет иметь право управлять заявками, администраторами и банами.";
$lang['steamid64'] = "SteamID64";
$lang['specify_the'] = "Укажите";
$lang['of_target'] = "Цели:";
$lang['manage_bans'] = "Управление банами";
$lang['manage_bans_desc_1'] = "Здесь вы можете контролировать, кто можеть подать заявку, а кто нет.";
$lang['manage_bans_desc_2'] = "Здесь вы также можете разбанить людей.";
$lang['id'] = "ID";
$lang['name'] = "Ник";
$lang['datew'] = "Дата";
$lang['banned_b'] = "Забанен";
$lang['cause'] = "Причина";
$lang['ban_reason'] = "Укажите причину бана: (если вы хотите разбанить, оставьте это поле пустым)";
$lang['settings'] = "Настройки";
$lang['settings_desc_1'] = "Здесь вы можете просмотреть или изменить свои системные настройки.";
$lang['settings_desc_2'] = "Только избранные имеют доступ к этим настройкам, поэтому вам не нужно беспокоиться о том, что другие администраторы увидят ваши пароли.";
$lang['general_conf'] = "Общая конфигурация";
$lang['s_name'] = "Имя сервера:";
$lang['s_name_desc'] = "Имя вашего сервера.";
$lang['steam_api_get'] = "Steam API - Узнать)";
$lang['api_desc'] = "Ваш Steam API.";
$lang['index_url'] = "URL Index:";
$lang['index_url_desc'] = "Вставьте http:// в начале и слэш в конце.";
$lang['animated_index'] = "Анимированый текст: (тип DISABLE отключен или DEFAULT для использования текста по умолчанию).";
$lang['animated_index_desc'] = "Пример:  'Добро пожаловать!', 'Хотите стать Администратором на нашем сервере?', 'Оставь заявку!'";
$lang['mysql_conf'] = "Конфигурация MySQL";
$lang['host'] = "Хост:";
$lang['host_desc'] = "Ваш MySQL хост.";
$lang['user'] = "Пользователь:";
$lang['user_desc'] = "Ваш логин от MySQL.";
$lang['pass'] = "Пароль:";
$lang['pass_desc'] = "Пароль от вашего MySQL.";
$lang['database'] = "База данных:";
$lang['database_desc'] = "Ваша база данных MySQL.";
$lang['adv_conf'] = "Расширенная настройка";
$lang['dev_access'] = "Режим разработчика (рекомендуется).";
$lang['yes'] = "Да";
$lang['no'] = "Нет";
$lang['captcha_sys'] = "Включить Captcha систему:";
$lang['recaptcha'] = "Re-Captcha ключ сайта - Узнать";
$lang['recaptcha_desc'] = "Ключ Re-Captcha вашего сайта.";
$lang['recaptcha_s'] = "Секретный Re-Captcha ключ - Узнать";
$lang['recaptcha_s_desc'] = "Ваш секретный Re-Captcha ключ.";
$lang['error_occurred_mysql'] = "Произошла ошибка в Вашей конфигурации MySQL, вы будете перенаправлены через несколько секунд.";
$lang['root_admin'] = "Вы не можете удалить разработчика";
$lang['p_hours'] = "Количество часов игрока";
$lang['warns'] = "Предупреждения";
$lang['accept'] = "Одобрить";
$lang['deny'] = "Отклонить";
$lang['remove'] = "Удалить";
$lang['conn_error'] = "При подключении к базе данных возникает ошибка, проверьте конфигурацию, если ошибка не пропала, откройте тикет поддержки. ОШИБКА:";
$lang['ban_by'] = "Вы навсегда забанены";
$lang['ban_from'] = "Забанен";
$lang['ban_reason_sys'] = "Причина:";
$lang['the_system'] = "в системе";
$lang['created_with'] = "Создано с любовью";
$lang['by'] = "от";
$lang['admin_elements'] = "Элементы Администратора";
$lang['apps'] = "Заявки";
$lang['home'] = "Главная";
$lang['logout'] = "Выйти";
$lang['langt'] = "Язык";
$lang['background_index'] = "URL фона главной страницы (убедитесь, что это прямая ссылка на файл изображения, Максимальное разрешение 1920x1080, введите DEFAULT, чтобы установить по умолчанию):";
$lang['background_index_desc'] = "Установить URL в качестве фона на главной странице.";
$lang['pic1'] = "Фон вопросов (убедитесь, что это прямая ссылка на файл изображения, Максимальное разрешение 1920x1080, введите по DEFAULT, чтобы установить по умолчанию):";
$lang['pic1_desc'] = "Изменяет параметры фона в панели администратора.";
$lang['pic2'] = "Фон управления Администраторами (убедитесь, что это прямая ссылка на файл изображения, Максимальное разрешение 1920x1080, введите DEFAULT для установки по умолчанию):";
$lang['pic2_desc'] = "Изменяет параметры фона в панели администратора.";
$lang['pic3'] = "Фон управления банами (убедитесь, что это прямая ссылка на файл изображения, Максимальное разрешение 1920x1080, введите DEFAULT для установки по умолчанию):";
$lang['pic3_desc'] =  "Изменяет параметры фона в панели администратора.";
$lang['pic4'] = "Фон основных настроек (убедитесь, что это прямая ссылка на файл изображения, Максимальное разрешение 1920x1080, введите DEFAULT для установки по умолчанию):";
$lang['pic4_desc'] = "Изменяет параметры фона в панели администратора.";
$lang['pic5'] = "Server Management background (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['pic5_desc'] = "Changes the background options at the admin panel.";
$lang['warnsys'] = "Включить систему скриншотов с предупреждениями:";
$lang['timesys'] = "Включить систему скриншотов с онлайном игрока:";
$lang['watch_application'] = "Обзор";
$lang['comments'] = "Комментарии";
$lang['comment_conf'] = "Настройка системы комментариев";
$lang['comments_enable'] = "Включить систему комментариев?";
$lang['comments_remove_root'] = "Только root-админы могут удалять комментарии?";
$lang['comments_remove_self'] = "Могут ли администраторы /root - админы удалять свои собственные комментарии??";
$lang['comments_admin_remove_root'] = "Могут ли администраторы удалять комментарии root-администратора?";
$lang['comments_admin_remove_admins'] = "Могут ли администраторы удалять другие комментарии администратора?";
$lang['comments_user_see'] = "Should applicants see what admins comment on his/her application?";
$lang['comments_user_comment'] = "Should applicants be able to comment on his/her application?";
$lang['comments_user_remove'] = "Should applicants be allowed to remove their own comments?";
$lang['no_comments'] = "В настоящее время нет комментариев, добавьте комментарий ниже.";
$lang['send_comment'] = "Отправить комментарий";
$lang['add_comment'] = "Добавить комментарий";
$lang['applicant'] = "Заявитель";
$lang['date_at_hour'] = "at"; // РЕЗУЛЬТАТ БЫЛ ДЛЯ ПРИМЕРА: 04/14/2018 at 9:03 p.m
$lang['applicant_id'] = "Номер заявки:";
 // DATE FORMAT, RESULT WOULD BE: 01/12/2018. PLEASE DO NOT CHANGE THE WORDS.
// YOU CAN DO FOR EXAMPLE, year-month-day AND RESULT WILL BE: 2018-12-01
// НЕ ИЗМЕНЯЙТЕ 'month', 'day', 'year'
$lang['date'] = "month/day/year";
// HOUR FORMAT, RESULT WOULD BE: 02:25 p.m. PLEASE DO NOT CHANGE THE WORDS
// YOU CAN DO FOR EXAMPLE, minutes:hours meridiem AND RESULT WILL BE: 25:02 p.m
// НЕ ИЗМЕНЯЙТЕ 'hours', 'minutes', 'meridiem'
$lang['hour'] = "hours:minutes meridiem";
$lang['server_choose'] = "Для какого сервера вы подаете заявку?";
$lang['applicant_forserver'] = "Сервера:";
$lang['applicant_forserver_unknown'] = "Неизвестный(ID %id)";
$lang['servers_conf'] = "Управление серверами";
$lang['servers_conf_desc_1'] = "Здесь вы можете добавлять или удалять сервера из системы..";
$lang['servers_conf_desc_2'] = "Чтобы добавить новый сервер, укажите уникальный идентификатор сервера и имя сервера, затем нажмите зеленую кнопку.";
$lang['servers_conf_desc_3'] = "Чтобы удалить сервер, укажите уникальный идентификатор сервера и нажмите зеленую кнопку.";
$lang['server_specify_id'] = "Укажите уникальный идентификатор сервера:";
$lang['server_specify_name'] = "Укажите имя сервера: (если вы удаляете сервер, просто оставьте это поле пустым)";
$lang['server_not_available'] = "Владелец сервера еще не настроил доступные сервера! <br> Пожалуйста, вернитесь позже.";
?>
