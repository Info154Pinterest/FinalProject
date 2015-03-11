CREATE DATABASE `nyt` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `results` (
  `search` varchar(500) NOT NULL,
  `id` int(100) NOT NULL,
  `web_url` varchar(100) NOT NULL,
  `headline` varchar(50) DEFAULT NULL,
  `snippet` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`search`,`web_url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


SELECT * FROM nyt.results;



