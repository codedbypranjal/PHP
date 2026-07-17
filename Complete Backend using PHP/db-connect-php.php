<?php
$host='localhost';
$user='root';
$pass='pranjal@123';
$db='world';

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("Database not connected");
}
