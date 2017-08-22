<?php

$host="localhost"; // Host name
$username=""; // Mysql username

$password=""; //database password
$db_name="invoice-system"; // Database name


$tbl_name="clients"; // Table name

// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db("$db_name")or die("cannot select DB");
