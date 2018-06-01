-- Add user
INSERT INTO `db_name`.`wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES ('USERID', 'USERLOGIN', 'USERPW', 'USERNICENAME', 'EMAILADDRESS', '', '2016-12-09 00:00:00', '', '0', 'DISPLAYNAME');

-- Add user meta. wp_ prefix on meta keys must match the database prefix
INSERT INTO `db_name`.`wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (NULL, 'USERID', 'wp_capabilities', 'a:1:{s:13:"administrator";s:1:"1";}'), (NULL, 'USERID', 'wp_user_level', '10');