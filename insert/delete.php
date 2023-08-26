<?php
$deleteId=$_REQUEST['id'];
if(isset($_REQUEST['pro_pic'])) {
    $deletPic = $_REQUEST['pro_pic'];



    $con = mysqli_connect('localhost', 'root', '', 'test');
    $query = "DELETE FROM users WHERE users.user_id=$deleteId";
    /*echo $query;*/
    $result = mysqli_query($con, $query);
    if ($result) {
        if(file_exists('upImages'))
        {
            $t=unlink('upImages/'.$deletPic);
            header('location:login.php?msg=Delete successfully');

        }


    } else {
        echo "no";
    }
}