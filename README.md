AEA5.2. Desenvolupament d’un CRUD en PHP (MySQLi) en servidor real
Requisits de compleció


-Paguina web sobre gestió de videojocs que crea els jocs amb scripts amb PUT i GET 



CREATE TABLE videojuegos(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
    descripcion varchar(255)
);

