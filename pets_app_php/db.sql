DROP TABLE IF EXISTS `pet_type`;

CREATE TABLE `pet_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `pet`;

CREATE TABLE `pet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `pet_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pet_pet_type` (`pet_type_id`),
  CONSTRAINT `fk_pet_pet_type` FOREIGN KEY (`pet_type_id`) REFERENCES `pet_type` (`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `pet_name_history`;

CREATE TABLE `pet_name_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pet_history` (`pet_id`),
  CONSTRAINT `fk_pet_history` FOREIGN KEY (`pet_id`) REFERENCES `pet` (`id`)
) ENGINE=InnoDB;




