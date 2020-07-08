<?php
// THIS USES THE BASIC PHP VARIABLE SYNTAX. PLEASE DON'T WRITE ANYTHING OUTSIDE THE "". IF YOU'RE GOING TO USE THE " CHAR INSIDE A STRING,
// BE SURE TO PUT A \ CHAR BEFORE THE ", FOR EXAMPLE: Press the \"Submit\" button.
// THESE WILL BREAK THE SYSTEM:
// Press the "Submit" button.
// Press the "\Submit"\ button.
// Press the \"Submit" button.
// Press the "Submit\" button.
// THE RIGHT WAY IS ONLY THIS ONE:
// Press the \"Submit\" button.oh 
// \" This \" Will Not \" Break \"\" Anything \"\"\"
// HOPE YOU UNDERSTAND IT.
// YOU CAN ACTUALLY SEE A LIVE EXAMPLE AT LINE 16.
// THANK YOU FOR HELPING ME TRANSLATING THIS SCRIPT TO OTHER LANGUAGES.

$lang['quest_desc'] = "You can change your application questions here, remember to press \"Submit\" at the very bottom.";
$lang['email_invalid'] = "The email address you entered is not valid";
$lang['not_image'] = "File is not an image";
$lang['img_large'] = "The image file is too large";
$lang['types_allowed'] = "We only allow JPG, JPEG, PNG & GIF files that don't exceed 5MB are allowed.";
$lang['file_not_uploaded'] = "Sorry, your file was not uploaded.";
$lang['problem_uploading'] = "Sorry, there is a problem on uploading your file.";
$lang['staff_applications'] = "Staff Applications";
$lang['button_login'] = "Click the button below to login!";
$lang['script'] = "Script";
$lang['exploiting'] = "Exploiting Attempt";
$lang['pending'] = "Pending...";
$lang['accepted'] = "Accepted...";
$lang['already_admin'] = "You are admin already";
$lang['report_to'] = "REPORT THIS TO";
$lang['denied'] = "Denied...";
$lang['apply_now'] = "Apply now!";
$lang['apply'] = "Apply";
$lang['playtime'] = "Screenshot of your total hours played:";
$lang['warnsp'] = "Screenshot of your warns (type !warns In-Game):";
$lang['email'] = "Email:";
$lang['specify_email'] = "Please specify your email";
$lang['submit'] = "Submit";
$lang['cancel'] = "Cancel";
$lang['submit_applies'] = "Submitted Applications";
$lang['weird_stuff_report'] = "Something strange is going on, please report this to ";
$lang['error'] = "Error";
$lang['not_found'] = "Sorry, page not found";
$lang['if_not'] = "If you don't get redirected in 5 seconds, click";
$lang['here'] = "here";
$lang['admin_p'] = "Admin Panel";
$lang['change_questions'] = "Change Questions";
$lang['quest'] = "Question";
$lang['manage_admins'] = "Manage Admins";
$lang['manage_admins_desc'] = "Note that any admin specified here, will be allowed to manage applications, administrators and bans.";
$lang['steamid64'] = "SteamID64";
$lang['specify_the'] = "Please specify the";
$lang['of_target'] = "of the target:";
$lang['manage_bans'] = "Manage Bans";
$lang['manage_bans_desc_1'] = "Here you can control from who should apply or not.";
$lang['manage_bans_desc_2'] = "Here you can also unban people that tried to exploit the system.";
$lang['id'] = "ID";
$lang['name'] = "Name";
$lang['datew'] = "Date";
$lang['banned_b'] = "Banned by";
$lang['cause'] = "Reason";
$lang['ban_reason'] = "Specify ban reason: (if you're unbanning someone, just leave this blank)";
$lang['settings'] = "Settings";
$lang['settings_desc_1'] = "Here you can preview or modify your system settings.";
$lang['settings_desc_2'] = "Only the licensee has access to these settings, so you don't need to worry about another admins looking your passwords.";
$lang['general_conf'] = "General Configuration";
$lang['s_name'] = "Server Name:";
$lang['s_name_desc'] = "Your server name.";
$lang['steam_api_get'] = "Steam API (get it";
$lang['api_desc'] = "Your Steam API.";
$lang['index_url'] = "Index URL:";
$lang['index_url_desc'] = "Include http:// at the beginning and slash at the end.";
$lang['animated_index'] = "Home animated messages: (type DISABLE to disable, or DEFAULT to use default text.)";
$lang['animated_index_desc'] = "Example: Welcome!, Can you be an admin?, Apply now for admin!";
$lang['mysql_conf'] = "MySQL Config";
$lang['host'] = "Host:";
$lang['host_desc'] = "Your MySQL host.";
$lang['user'] = "User:";
$lang['user_desc'] = "Your MySQL user.";
$lang['pass'] = "Password:";
$lang['pass_desc'] = "Your MySQL password.";
$lang['database'] = "Database:";
$lang['database_desc'] = "Your MySQL database.";
$lang['adv_conf'] = "Advanced Config";
$lang['dev_access'] = "Allow developers (recommended).";
$lang['yes'] = "Yes";
$lang['no'] = "No";
$lang['captcha_sys'] = "Enable Captcha System:";
$lang['recaptcha'] = "Re-Captcha site key - You can get it";
$lang['recaptcha_desc'] = "Your Re-Captcha site key.";
$lang['recaptcha_s'] = "Re-Captcha secret key - You can get it";
$lang['recaptcha_s_desc'] = "Your Re-Captcha secret key.";
$lang['error_occurred_mysql'] = "An error has occurred in your MySQL configuration, you will be redirected in a few seconds.";
$lang['root_admin'] = "You can't delete the root admin";
$lang['p_hours'] = "Player Hours";
$lang['warns'] = "Warns";
$lang['accept'] = "Accept"; 
$lang['deny'] = "Deny";
$lang['remove'] = "Remove";
$lang['conn_error'] = "There was a problem at the moment of connecting to the database, most likely your MySQL username doesn't exist, password is incorrect, database doesn't exist or we can't create a connection to your host.<br>Error:";
$lang['ban_by'] = "You have been permanently banned by";
$lang['ban_from'] = "from applying";
$lang['ban_reason_sys'] = "Reason:";
$lang['the_system'] = "the system";
$lang['created_with'] = "Created with";
$lang['by'] = "by";
$lang['admin_elements'] = "Admin Elements";
$lang['apps'] = "Applications";
$lang['home'] = "Home";
$lang['logout'] = "Log out";
$lang['langt'] = "Language";
$lang['background_index'] = "Home background URL (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['background_index_desc'] = "Set URL as background on the home page.";
$lang['pic1'] = "Change Questions background (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['pic1_desc'] = "Changes the background options at the admin panel.";
$lang['pic2'] = "Admins Management background (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['pic2_desc'] = "Changes the background options at the admin panel.";
$lang['pic3'] = "Bans Management background (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['pic3_desc'] =  "Changes the background options at the admin panel.";
$lang['pic4'] = "General Config background (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['pic4_desc'] = "Changes the background options at the admin panel.";
$lang['pic5'] = "Server Management background (be sure it's a direct image file, max resolution is 1920x1080, type DEFAULT to set to default):";
$lang['pic5_desc'] = "Changes the background options at the admin panel.";
$lang['warnsys'] = "Enable warns screenshot system:";
$lang['timesys'] = "Enable playtime screenshot system:";
$lang['watch_application'] = "Review";
$lang['comments'] = "Comments";
$lang['comment_conf'] = "Comment System Config";
$lang['comments_enable'] = "Enable commenting system?";
$lang['comments_remove_root'] = "Should ONLY root admins be allowed to remove comments?";
$lang['comments_remove_self'] = "Should admins/root admins be allowed to remove their own comments?";
$lang['comments_admin_remove_root'] = "Should admins be allowed to remove root admin comments?";
$lang['comments_admin_remove_admins'] = "Should admins be allowed to remove other admin comments?";
$lang['comments_user_see'] = "Should applicants see what admins comment on their application?";
$lang['comments_user_comment'] = "Should applicants be able to comment on their application?";
$lang['comments_user_remove'] = "Should applicants be allowed to remove their own comments?";
$lang['no_comments'] = "There are currently no comments, add a comment now below.";
$lang['send_comment'] = "Send comment";
$lang['add_comment'] = "Add comment";
$lang['applicant'] = "Applicant";
$lang['date_at_hour'] = "at"; // RESULT WOULD BE FOR EXAMPLE: 04/14/2018 at 9:03 p.m
$lang['applicant_id'] = "Apply ID";
 // DATE FORMAT, RESULT WOULD BE: 01/12/2018. PLEASE DO NOT CHANGE THE WORDS.
// YOU CAN DO FOR EXAMPLE, year-month-day AND RESULT WILL BE: 2018-12-01
// JUST DON'T CHANGE/EDIT 'month', 'day', 'year'
$lang['date'] = "month/day/year";
// HOUR FORMAT, RESULT WOULD BE: 02:25 p.m. PLEASE DO NOT CHANGE THE WORDS
// YOU CAN DO FOR EXAMPLE, minutes:hours meridiem AND RESULT WILL BE: 25:02 p.m
// JUST DON'T CHANGE/EDIT 'hours', 'minutes', 'meridiem'
$lang['hour'] = "hours:minutes meridiem";
$lang['server_choose'] = "For what server are you applying?";
$lang['applicant_forserver'] = "Applying for server:";
$lang['applicant_forserver_unknown'] = "Unknown (ID %id)";
$lang['servers_conf'] = "Manage Servers";
$lang['servers_conf_desc_1'] = "Here you can add or remove servers from the system.";
$lang['servers_conf_desc_2'] = "To add a new server, specify the server unique ID and the server name, then press the green button.";
$lang['servers_conf_desc_3'] = "To remove a server, specify the server unique ID, and press the green button.";
$lang['server_specify_id'] = "Please specify the unique server id: (be sure it's unique, otherwise it won't add)";
$lang['server_specify_name'] = "Please specify the server name: (if you're removing a server, just leave this blank)";
$lang['server_not_available'] = "The server admin hasn't configured the available servers yet!<br>Please come back later.";


$lang['ranks'] = "Ranks";
$lang['applicant_forrank'] = "Applying for rank:";
$lang['server_specify_rank'] = "Please specify the server applicable ranks separated by a comma (CASE SENSITIVE, BE SURE IT EQUALS IN-GAME). Example: tmod, mod, admin, Head-Admin";
$lang['servers_conf_desc_4'] = "To edit a server, specify the server unique ID, type new data, and press the green button.";
$lang['admin_removed_success'] = "Admin removed successfully.";
$lang['server_sucess_removed'] = "Server has been successfully removed.";
$lang['server_sucess_edited'] = "Server has been successfully edited.";
$lang['server_sucess_added'] = "Server has been successfully added.";
$lang['server_error_rank'] = "Please specify at least one rank, separated by a comma!<br>Example: tmod, moderator, admin";
$lang['error_msg_title'] = "Hold on!";
$lang['success_msg_title'] = "Success!";
$lang['rank_choose'] = "For what rank are you applying?";
$lang['please_server_select'] = "Please select a server";
$lang['please_server_select2'] = "Please select a server above";
$lang['rank_set'] = "Rank to set";

$lang['app_wait_title'] = "Please wait a moment";
$lang['app_wait_desc'] = "We are currently sending your application.";

$lang['app_result:ok'] = "Your application has been successfully sent.";
$lang['app_result:ok_title'] = "Good!";

$lang['app_result:error'] = "An unknown error has occurred! Please try again later.";
$lang['app_result:error_title'] = "Oh no!";

$lang['app_result:invalidserver'] = "Please select at least one server before continuing!";
$lang['app_result:invalidserver_title'] = "Hold on!";

$lang['app_result:uploaderror'] = "An error occurred while trying to upload your images. Please try using another browser.";
$lang['app_result:uploaderror_title'] = "Oh no!";

$lang['app_result:upload_compat'] = "We only allow JPG, JPEG, PNG & GIF files that don't exceed 5MB are allowed.";
$lang['app_result:upload_compat_title'] = "Hold on!";

$lang['app_result:appbanned'] = "You are currently banned from sending any new applications.";
$lang['app_result:appbanned_title'] = "Wait a minute!";

$lang['app_result:captcha'] = "You didn't pass the captcha! Please try again.";
$lang['app_result:captcha_title'] = "Hold on!";

$lang['app_result:email'] = "Please enter a valid email.";
$lang['app_result:email_title'] = "Hold on!";

$lang['app_result:applied'] = "You already have an application registered on the system!";
$lang['app_result:applied_title'] = "Hold on!";

$lang['delete_ov'] = "Delete applications over time? (to allow re-applying)";
$lang['delete_del'] = "How many days till the application is removed if the app is denied or accepted?";

$lang['backup'] = "Backup Database";
$lang['backup_config'] = "Backup Configuration";

$lang['mandatory'] = "Mandatory";
$lang['mandatory_2'] = "This answer was mandatory but the applicant didn't answer";

$lang['gmod_playtime'] = "Forever playtime:";
$lang['hours'] = "hours";

$lang['deny_description'] = "What are the reasons of the denial? This message will be shown to the applicant.";

$lang['app_pending'] = 'pending';
?>
