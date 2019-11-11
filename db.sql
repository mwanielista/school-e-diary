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



