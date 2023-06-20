-- db creation script for user registration
create schema users;

use users;

create table Users
(
    id int primary key auto_increment,
    username varchar(45) not null,
    password varchar(45) not null,
    email varchar(65) not null,
    address varchar(100) not null
);

create table Sessions
(
    id int primary key auto_increment,
    username varchar(45) not null,
    session_id varchar(55) not null
);

insert into Users(username,password,email,address) values ('clintEastWood','SomeThingBoutAWoman','clint.eastwood@gmail.com','Wild West Road 34'), ('user','password','user.user@gmail.com','Roblox boulevard 55'),('admin','secret_password','luigi.pirandello@gmail.com','Viale della liberta 56');