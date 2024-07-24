create database ecommerce_project;
use ecommerce_project;

create table catégorie(
id_catégorie int primary key auto_increment,
libelle varchar(500),
image_catégorie  varchar(1000));


create table product(
id_product  int primary key auto_increment,
nom_product varchar(100),
price decimal(8,2),
image_product varchar(400),
id_catégorie int,
foreign key (id_catégorie) references catégorie (id_catégorie));

alter table product
add column info varchar(100000);

alter table product
add column quntité int default 1;

describe product;

create table admin(
id_admin int primary key auto_increment,
nom varchar(100),
prenom varchar(100),
date_naissance date,
username varchar(150) unique,
password varchar(150) unique,
sexe varchar(20));




create table user(
id_user int primary key auto_increment,
full_name char(50),
email varchar(100),
password varchar(150));


create table commande(
id_commande  int primary key auto_increment,
id_user int,
les_produits text,
date_cmd date default CURRENT_TIMESTAMP,
total_payer  decimal(8,2),
foreign key (id_user)  references user  (id_user));

alter table user
add column image varchar(150);

describe  user;


select les_produits from  commande  where id_commande=20; 

SELECT * from product where id_product in(10,12);


insert into admin (nom,prenom,date_naissance,username,password,sexe) values ('haddade','amine','2004-6-25','amine 2004','2004','masculin');

update admin set username='Amine 2004' where id_admin=1; 

select* from commande;

select * from user;

insert into catégorie values(1,'elctronique');
insert into catégorie values(2,'parefum');
insert into catégorie values(3,'shoss');
insert into catégorie values(4,'vetements');
insert into catégorie values(5,'menagera');


select*from catégorie;
select*from user;

delete from catégorie   where id_catégorie=10;

delete from product where id_product=46;



update product set image_product="uploads/img3.jpeg"  where id_product=25;

delete  from product where id_product>=0;

insert into product(nom_product,price,image_product,id_catégorie,quntité,info) value('portable casque ',100.00,'../uploads/elctro/img5.jpeg',1,15,'helloe');
insert into product(nom_product,price,image_product,id_catégorie) value('perfumelover',100.00,'../uploads/Parfum/img7.jpeg',2);
insert into product(nom_product,price,image_product,id_catégorie) value('chanel Blue de dpe',500.00,'../uploads/parfum/img3.jpeg',2);
insert into product(nom_product,price,image_product,id_catégorie) value('puma collec',220.00,'../uploads/shoes/img1.jpeg',3);
insert into product(nom_product,price,image_product,id_catégorie) value('adidas new balance',899.00,'../uploads/shoes/img3.jpg',3);
insert into product(nom_product,price,image_product,id_catégorie) value('tshirt body shos',88.00,'../uploads/Vetements/img1.jpg',4);
insert into product(nom_product,price,image_product,id_catégorie) value('chmis grey',100.00,'../uploads/Vetements/img3.jpg',4);
insert into product(nom_product,price,image_product,id_catégorie) value('chemis blanche verre',99.00,'../uploads/Vetements/img2.jpg',4);
insert into product(nom_product,price,image_product,id_catégorie) value('tshirt body jackete',755.00,'../uploads/Vetements/img6.jpg',4);



select catégorie.id_catégorie,libelle,count(id_product) as nombre from product join catégorie on product.id_catégorie=catégorie.id_catégorie
group by catégorie.libelle;

alter table catégorie
add column image_catégorie  varchar(1000);


update catégorie set image_catégorie='../uploads/catégorie images/Apple technologies.jpeg' where id_catégorie=1;
update catégorie set image_catégorie='../uploads/catégorie images/ménagera_image.jpeg' where id_catégorie=5;
update catégorie set image_catégorie='../uploads/catégorie images/parefum_catégorie.jpeg' where id_catégorie=2;
update catégorie set image_catégorie='../uploads/catégorie images/shoes image_product.jpeg' where id_catégorie=3;
update catégorie set image_catégorie='../uploads/catégorie images/vétement product.jpeg' where id_catégorie=4;














