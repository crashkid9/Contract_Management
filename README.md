# Contract_Management
Software zum Verwalten von Handyverträgen (Beta)


Die Software ist noch bei weitem nicht fertig und enhält aktuell nur ein Login Formular. 

Bitte vorher folgende SQL Tabellen erstellen:



------------------------------------------------------
User Tabelle:

CREATE TABLE `user` ( `userId` int(11) NOT NULL AUTO_INCREMENT PRIMARY key,
 `userName` varchar(30) NOT NULL,
 `userEmail` varchar(60) NOT NULL, 
 `userPass` varchar(255) NOT NULL )
  ENGINE=InnoDB DEFAULT CHARSET=utf8; 



------------------------------------------------------

CREATE TABLE `vertraege` (
  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY key,
  `Mobilfunknummer` int(255) NOT NULL,
  `SIMNummer` int(255) NOT NULL,
  `Beschreibung` char(255) NOT NULL)
  ENGINE=InnoDB DEFAULT CHARSET=latin1;