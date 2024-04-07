<?php
$host ="mysql-server";
$username="root";
$password="secret";
$database="blog";

$con =mysqli_connect("$host","$username","$password","$database");
if(!$con)
{
    echo "database not connected";
    die();
}
?>