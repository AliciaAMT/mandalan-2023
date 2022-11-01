<?php
include ('connect.php');

mysql_query("drop database taylor");
mysql_query("create database taylor");


mysql_select_db("taylor");
$sql = "create table guestbook
(
name varchar(20),
location varchar(20),
comments varchar(5000),
date int(20)
)";
mysql_query($sql,$con);
$sql = "create table members
(
name varchar(20),
location varchar(20),
email varchar(30),
password varchar(16),
age varchar(20),
date int(20)
)";
mysql_query($sql,$con);
$sql = "create table forum
(
username varchar(20),
number int(20),
date varchar(50),
room varchar(20),
topic varchar(50),
threadcount int(10),
message varchar(5000)
)";
mysql_query($sql,$con);

echo "<br/>You just wiped the database!";
mysql_close($con);
?>
