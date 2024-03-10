<?php
    $db=mysqli_connect("localhost","root","","library"); //servername,username,password,databasename,all are bydefault except databse

if(!$db)
{
    die("Connection failed: ".mysqli_connect_error());
}
//echo "Connected successfully.";
?>