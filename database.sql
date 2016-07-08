# ************************************************************

#
# Host: localhost 
# Database: auth
# ************************************************************


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`)
VALUES
	(1,'admin@admin.com','$2y$10$tiMS2takQBQwSGwaDxSGNO2RiitS/GhvWjKpJA/JKIMDeLr2z7SLm'),
	(2,'email123@email.com','$2y$10$9OOFy5W.Vz0VapyS5U.ZqujRiXnklh48Nhc3qGfdSKxLbXRH3i87m'),
	(2,'rahul@email.com','rahul'),
	(2,'abc@email.com','abc');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
-- UNLOCK TABLES;

