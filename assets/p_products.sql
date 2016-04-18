#
# TABLE STRUCTURE FOR: p_products
#

DROP TABLE IF EXISTS `p_products`;

CREATE TABLE `p_products` (
  `p_id` int(20) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(200) NOT NULL,
  `p_description` text NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `quantity` int(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `p_products` (`p_id`, `p_name`, `p_description`, `p_type`, `quantity`, `status`) VALUES ('1', 'syringe', 'IV drops, Injection', 'tool', '20', 'instock');
INSERT INTO `p_products` (`p_id`, `p_name`, `p_description`, `p_type`, `quantity`, `status`) VALUES ('2', 'Mask', 'Prevent Infection', 'equipment', '200', 'Instock');
INSERT INTO `p_products` (`p_id`, `p_name`, `p_description`, `p_type`, `quantity`, `status`) VALUES ('3', 'thermometer', 'Check body temperature', 'equipment', '1', 'low');


