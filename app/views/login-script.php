<?php

$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; //database password
//J5eLX8LmN84W69m2

$db_name = "invoice-hub"; // Database name
$tbl_name = "users"; // Table name


// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con, $db_name)or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['myusername'];
    $_SESSION['mypassword'];
    //header("location:home.php");
    view::make('home'); }
else {
    echo "Wrong Username or Password";
}