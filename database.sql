USE test
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `provider` varchar(100) NOT NULL,
  `provider_uid` varchar(255) NOT NULL,
  `display_name` varchar(150) NOT NULL,
  `profile_url` varchar(300) NOT NULL,
  `photo_url` varchar(300) NOT NULL,
  `seat_id` varchar(10),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `provider_uid` (`provider_uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;