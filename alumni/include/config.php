<?php
// session_start();
// include 'admin/session.php';
$localhost='localhost';
$username='root';
$password='';
$db='alumni_db';

$con = mysqli_connect($localhost,$username,$password,$db);

if(!$con)
{
    echo "not connect";
}


?>