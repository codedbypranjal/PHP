<?php
$host='localhost';
$user='root';
$pass='';

$conn=mysqli_connect($host,$user,$pass);
if($conn)
{
    echo "Database connected successfully";
}
else{
    echo "Database failed to connect".mysqli_connect_error();
}