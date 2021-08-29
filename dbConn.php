<?php

$db = mysqli_connect("localhost","root","","signup");
$databasename='signup';
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>