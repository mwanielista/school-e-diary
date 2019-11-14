CREATE DATABASE edziennik;

CREATE TABLE users(idUsers int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  uidUsers varchar(30),
                  emailUsers varchar(50),
                  pwdUsers varchar(255),
                  userLevel varchar(10),
                  class varchar(3));

CREATE TABLE classes (id int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        name varchar(5) not null);

insert into classes values(null, '1a'),
                           (null, '1b'),
                           (null, '2a');

CREATE TABLE przedmioty (id int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                        name varchar(15) not null);
insert into przedmioty values(null, 'matematyka'),
                              (null, 'fizyka'),
                              (null, 'biologia'),
                              (null, 'adm');
CREATE TABLE oceny (id int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    nauczyciel int(10),
                    uczen int(10),
                    klasa varchar(5),
                    przedmiot varchar(10),
                    ocena varchar(4));
insert into oceny values(null, 50, 51, '1a', 'matematyka', '3'),
                        (null, 50, 51, '1a', 'matematyka', '2'),
                        (null, 50, 51, '1a', 'matematyka', '1');

CREATE TABLE projekty (id_projektu int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
                     nazwa_projektu varchar(60), 
                     max_uczestnikow int(3),
                     id_nauczyciela varchar(10));

CREATE TABLE projekty_uczestnicy(id int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                                id_projektu int(3),
                                id_uczestnika int(4),
                                status varchar(12) DEFAULT 'not checked');

INSERT INTO projekty VALUES(null, 'test1', 2),
                           (null, 'test2', 23);





