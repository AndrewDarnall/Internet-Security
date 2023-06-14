-- db creation script for item (advice) storage and registration

create schema Exploits;

use Exploits;

create table exploits
(
    id int primary key auto_increment,
    item_name varchar(45) not null,
    item_price float not null
);

insert into exploits (item_name, item_price) values ('sql_injection',5.99), ('buffer_overflow',5.99), ('firmware_exploit',50.99), ('DMI_network_hack',100.99), ('30_e_Lode_Internet_Security',1000000.00);