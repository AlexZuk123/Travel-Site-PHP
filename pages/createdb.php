<?php
include_once('functions.php');
$link = connect();

$ct1 = 'create table countries(
id int not null auto_increment primary key,
country varchar(64) unique)default charset="utf8"';

$ct2 = 'create table cities(
id int not null auto_increment primary key,
city varchar(64),
countryid int,
foreign key(countryid) references countries(id)
on delete cascade,
ucity varchar(128),
unique index ucity(city, countryid))default
charset="utf8"';

$ct3 = 'create table hotels(
id int not null auto_increment primary key,
hotel varchar(64),
cityid int,
stars int,
cost int,
info varchar(128),
foreign key(cityid) references countries(id)
on delete cascade,
ucity varchar(128))default
charset="utf8"';

$ct4 = 'create table images(
id int not null auto_increment primary key,
hotelid int,
foreign key(hotelid) references hotels(id)
on delete cascade,
imagepath varchar(128))default
charset="utf8"';

$ct5 = 'create table roles(id int not null auto_increment primary key, role varchar(64) unique)default 
charset="utf8"';

$ct6 = 'create table users(
id int not null auto_increment primary key,
login varchar(64) unique,
pass varchar(64),
email varchar(64) unique,
roleid int,
foreign key(roleid) references roles(id)
on delete cascade,
discont int,
avatar varchar(128))default charset="utf8"';

// mysqli_query($link, $ct1);
// $err = mysqli_errno($link);
// if ($err) {
//     echo 'Error code 1:' . $err . '<br>';
//     exit();
// }

// mysqli_query($link, $ct2);
// $err = mysqli_errno($link);
// if ($err) {
//     echo 'Error code 2:' . $err . '<br>';
//     exit();
// }

// mysqli_query($link, $ct3);
// $err = mysqli_errno($link);
// if ($err) {
//     echo 'Error code 3:' . $err . '<br>';
//     exit();
// }

// mysqli_query($link, $ct4);
// $err = mysqli_errno($link);
// if ($err) {
//     echo 'Error code 4:' . $err . '<br>';
//     exit();
// }

// mysqli_query($link, $ct5);
// $err = mysqli_errno($link);
// if ($err) {
//     echo 'Error code 5:' . $err . '<br>';
//     exit();
// }

// mysqli_query($link, $ct6);
// $err = mysqli_errno($link);
// if ($err) {
//     echo 'Error code 6:' . $err . '<br>';
//     exit();
// }