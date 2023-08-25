<?php
$deleteId=$_REQUEST['id'];
echo $deleteId;
$con = (mysqli_connect('localhost', 'root', '', 'test'));
$query="DELETE FROM users WHERE users.user_id=$deleteId";
echo $query;
$result=mysqli_query($con,$query);
if($result)
{
    header('location:show.php?msg=Delete successfully');
}
else{
    echo "no";
}