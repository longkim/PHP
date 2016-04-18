#
# TABLE STRUCTURE FOR: p_sales
#

DROP TABLE IF EXISTS `p_sales`;

CREATE TABLE `p_sales` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(20) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `amount` int(20) NOT NULL,
  `balance` int(20) NOT NULL,
  `shipping_status` varchar(10) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_id`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `fk_product` FOREIGN KEY (`p_id`) REFERENCES `p_products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `p_sales` (`s_id`, `p_id`, `customer_name`, `gender`, `address`, `amount`, `balance`, `shipping_status`, `payment_status`, `date`) VALUES ('1', '1', 'Will', 'Male', '123 John Street', '120', '0', 'pending', 'finished', '2016-04-18 15:32:19');
INSERT INTO `p_sales` (`s_id`, `p_id`, `customer_name`, `gender`, `address`, `amount`, `balance`, `shipping_status`, `payment_status`, `date`) VALUES ('2', '2', 'Long', 'Male', '89 address blv', '100', '20', 'shipped', 'finished', '2016-04-18 15:32:19');
INSERT INTO `p_sales` (`s_id`, `p_id`, `customer_name`, `gender`, `address`, `amount`, `balance`, `shipping_status`, `payment_status`, `date`) VALUES ('3', '3', 'Elise', 'Female', 'Launder Street', '1000', '20', 'pending', 'pending', '2016-04-18 15:53:36');


