INSERT INTO `ENTER_DB_NAME_HERE`.`wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES ('42', 'sparxoo_admin', MD5('ENTER_PASSWORD_HERE'), 'ENTER_USERNICENAME_HERE', 'ENTER_EMAIL_HERE', '', '2018-06-01 00:00:00', '', '0', 'ENTER_USER_DISPLAYNAME_HERE');

INSERT INTO `ENTER_DB_NAME_HERE`.`wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (NULL, '42', 'wp_capabilities', 'a:1:{s:13:"administrator";s:1:"1";}');

INSERT INTO `ENTER_DB_NAME_HERE`.`wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (NULL, '42', 'wp_user_level', '10');
