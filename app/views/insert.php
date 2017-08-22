<?php

$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; //database password
//J5eLX8LmN84W69m2

$db_name = "invoice-hub"; // Database name
$tbl_name = "clients"; // Table name

$con = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($con, $db_name) or die("cannot select DB");

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$balance = $_POST['balance'];
$active = $_POST['active'];
$options = $_POST['options'];

$order = "INSERT INTO clients

            (clientname, contact, email, balance, active, options)

            VALUES

            ('$name','$contact','$email','$balance','$active','$options')";

$result = mysqli_query($order);  //order executes

if ($result) {

    //header("location: renewal-info.php");
    echo("<br>Input data is succeed");

} else {

    echo("<br>Input data failed");

}

mysqli_close($con);

?>