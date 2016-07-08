

--
-- Database: `contactlist`
--

CREATE DATABASE contactlist;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--


CREATE TABLE contacts
(
ID int NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
email varchar(255),
number varchar(255),
PRIMARY KEY (ID)
)
--
-- Dumping data for table `users`
--


INSERT INTO contacts values(default,"rahul","rmeshram@yodlee.com","9035752358")
INSERT INTO contacts values(default,"abc","abc@yodlee.com","8098409398")
INSERT INTO contacts values(default,"xyz","xyz@yodlee.com","8598098359")
