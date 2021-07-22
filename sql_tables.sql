


DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `patient_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `address` VARCHAR(200) NOT NULL,
  `phone` INT(11) NOT NULL,
  `age` INT(11) NOT NULL,
  `gender` CHAR(2) NOT NULL,
  `section` VARCHAR(50) NOT NULL,
  `date_issued` TIMESTAMP NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;



