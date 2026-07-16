<?php
include 'db-connect-php';
$sql="Create Database World";
$result=mysqli_query($conn,$sql);
if($result)
    {
        echo 'Database is created';
    }
    else{
        echo 'Database is not created.' .mysqli_error($conn);
    }
    ?>