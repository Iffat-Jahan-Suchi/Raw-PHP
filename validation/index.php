<?php
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];

$count=strlen($pass);


if(!($count>=6 && $count<=10))
{
    header('location:login.php?wrongPass=your pass is wrong');
}
else
{
    echo "ok";
}