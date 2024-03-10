<?php
    $db=mysqli_connect("localhost","root","","library"); //servername,username,password,databasename

if(!$db)
{
    die("Connection failed: ".mysqli_connect_error());
}
?>