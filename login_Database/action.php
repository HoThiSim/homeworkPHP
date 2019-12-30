<?php
$server="localhost";
$user="root";
$pass="";

$connection= new mysqli($server,$user,$pass);

//create database
$createDatbase ="CREATE DATABASE IF NOT EXISTS formlogin";
$connection->query($createDatbase);
$connection->select_db("formlogin");

$createTable="CREATE TABLE IF NOT EXISTS login(id int auto_increment not null primary key, name varchar(300) not null,pass varchar(300) not null  )";
$connection->query($createTable);

?>