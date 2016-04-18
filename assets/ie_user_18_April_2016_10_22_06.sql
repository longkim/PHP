#
# TABLE STRUCTURE FOR: ie_user
#

DROP TABLE IF EXISTS `ie_user`;

CREATE TABLE `ie_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) NOT NULL,
  `u_last_name` varchar(50) NOT NULL,
  `u_email` varchar(150) NOT NULL,
  `u_password` varchar(150) NOT NULL,
  `u_login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `ie_user` (`u_id`, `u_name`, `u_last_name`, `u_email`, `u_password`, `u_login_time`, `u_status`) VALUES ('2', 'vinh', 'kim', 'kvlong88@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-03-26 19:16:32', '0');
INSERT INTO `ie_user` (`u_id`, `u_name`, `u_last_name`, `u_email`, `u_password`, `u_login_time`, `u_status`) VALUES ('5', 'dany', 'Xander', 'dxander@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-03-27 15:43:20', '0');


