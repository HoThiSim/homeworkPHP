<?php
$server="localhost";
$user="root";
$pass="";

$connection= new mysqli($server,$user,$pass);

//create database
$create ="CREATE DATABASE IF NOT EXISTS image_managerment";
$connection->query($create);
$connection->select_db("image_managerment");

$createTableImage="CREATE TABLE IF NOT EXISTS image(id int auto_increment not null primary key, link varchar(300) not null  )";
$connection->query($createTableImage);

?>