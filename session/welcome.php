<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'test');
if(isset($_REQUEST['submit']))
{
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $query="SELECT * FROM login WHERE name='$name' && password='$pass'";
    $final=mysqli_query($con,$query);
    $count=mysqli_num_rows($final);

    if($count)
    {
        $_SESSION['name']=$name;
        header("location:login.php");
    }
    else
    {
        echo "wrong password";
    }
}
