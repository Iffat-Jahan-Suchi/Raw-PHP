<?php
$con = (mysqli_connect('localhost', 'root', '', 'test'));
if ($con) {
    echo "ok";
}

if (isset($_REQUEST['submit'])) {
    $userName = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $editId = $_REQUEST['editId'];
    echo $editId;

    $query ="UPDATE users SET user_name ='$userName',email='$mail',password='$pass' WHERE users.user_id=$editId";
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:login.php?update=updated");
    }
    else{
        echo "not update";
    }
            //UPDATE `users` SET `user_name` = 'iffat jahan shuchi', `email` = 'iffatjahan045@gmail.com', `password` = '123456' WHERE `users`.`user_id` = 1;
}
