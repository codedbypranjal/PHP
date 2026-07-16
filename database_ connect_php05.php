<?php
$host='localhost';
$user='root';
$pass='pranjal@123';

$conn=mysqli_connect($host,$user,$pass);
if(!$conn)
{
    die"Database not connected";
}
