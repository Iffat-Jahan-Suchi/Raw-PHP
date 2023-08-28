<?php
$con = mysqli_connect('localhost', 'root', '', 'test');
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $query = "SELECT * FROM users WHERE user_name='$name'";
    $result=mysqli_query($con,$query);
    if($raw=mysqli_fetch_assoc($result))
    {
        $name=$raw['name'];
        echo $name;
    }

}
?>


<form action="" method="post">
    <input type="text" name="name" placeholder="enter search user">
    <input type="submit" name="search">
</form>
