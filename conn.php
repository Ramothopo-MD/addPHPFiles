<?php 
$dbhost='localhost';
$dbusername="root";
$dbpass="";
$dbname='images';

$conn=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if(!$conn){
    die("Database connection failed...");
}else{
    echo 'Successfully connected to the database...';
}
