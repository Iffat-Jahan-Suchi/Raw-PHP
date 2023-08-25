<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $con = (mysqli_connect('localhost', 'root', '', 'test'));
    /*if ($con) {
        echo "connet";
    }*/
    $query = "INSERT INTO users (user_name,email,password)";
    $query .= "VALUES('$name','$email','$pass')";
    $result = mysqli_query($con, $query);
    if (!$result) {
      die('not insert'.mysqli_error());
    } else {
        echo "insert";
    }


}

?>

<form action="login.php" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="email" name="email" placeholder="enter your email">
    <input type="password" name="password" placeholder="enter your password">
    <input type="submit" name="submit">
</form>
