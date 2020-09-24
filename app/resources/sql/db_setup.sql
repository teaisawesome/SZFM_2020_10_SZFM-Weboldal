/*
localhost/phpmyadmin -> bejelentkezel -> sql menüpont

a lenti scriptet beilleszted.

done.
*/

CREATE DATABASE SZFM;

CREATE TABLE RANKS(
    `ID` INT NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(30),
    PRIMARY KEY (`ID`)
);

INSERT INTO RANKS VALUES(NULL, 'CUSTOMER');
INSERT INTO RANKS VALUES(NULL, 'EMPLOYEE');
INSERT INTO RANKS VALUES(NULL, 'BOSS');

CREATE TABLE `szfm`.`users` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(60) NOT NULL , `PASSWORD` MEDIUMTEXT NOT NULL , `ADDRESS` VARCHAR(200) NOT NULL , `EMAIL` VARCHAR(100) NOT NULL , `PHONE_NUMBER` VARCHAR(20) NOT NULL , `RANK_ID` INT NOT NULL , ISPREMIUMMEMBER INT NOT NULL , IMAGE VARCHAR(300) , PRIMARY KEY (`ID`), UNIQUE `EMAIL` (`EMAIL`), UNIQUE `PHONE` (`PHONE_NUMBER`), FOREIGN KEY (`RANK_ID`) REFERENCES RANKS(`ID`)) ENGINE = InnoDB;