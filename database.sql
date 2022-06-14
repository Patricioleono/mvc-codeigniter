create database mvcpruebas;

use mvcpruebas;

drop table beer;
create table beer(
id int primary key auto_increment,
namebeer varchar(70),
gradebeer int(10),
typebeer varchar(70)
);


insert into beer values(
1,'Sol',14,'lager');

insert into beer values(
3,'Kunstman',16,'Pale Ale');
