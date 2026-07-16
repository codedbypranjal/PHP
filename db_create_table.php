<?php
include 'db-connect-php.php';
$sql="Create table person
(
Id int,
Name varchar(20),
Age int,
Salary bigint
)";

$result=mysqli_query($conn,$sql);
if($result)
    {
        echo "Table is created";
    }
else{
    echo "Table is not created".mysqli_error($conn);
}