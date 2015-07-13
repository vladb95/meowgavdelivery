create database mdDataBase;
use mdDataBase;
/*создание таблиц для продуктов*/
create table Product_type(id int primary key auto_increment,name varchar(20) not null);
create table Manufactures(id int primary key auto_increment,name varchar(20) not null,country varchar(20));
create table Pets_age(id int primary key auto_increment,age_name varchar(20) not null);
create table Pets_type(id int primary key auto_increment,type_name varchar(20) not null);
create table Product(id int primary key auto_increment,product_name varchar(50) not null,product_type_id int,manufact_id int,pet_type_id int,pet_age_id int,price int,product_count int,comment_text varchar(200),rate int,sales int,foreign key (product_type_id) references Product_type(id),foreign key (manufact_id) references Manufactures(id),foreign key(pet_type_id) references Pets_type(id),foreign key (pet_age_id) references Pets_type(id));