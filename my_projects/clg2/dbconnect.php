<?php
$DATABASE_HOST="localhost";
$DATABASE_USER="root";
$DATABASE_PASS='';
$DATABASE_NAME="registration_list";
$version=2;
$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME) ;

// errormsg to check data base connected or not.
if(!$con){
    die('Error connecting to the database' . mysqli_connect_error());
}
else{
    echo "";
}
?>
