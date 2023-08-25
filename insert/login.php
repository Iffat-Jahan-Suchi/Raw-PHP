<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if($name&&$email&&$pass)
    {
        $con = (mysqli_connect('localhost', 'root', '', 'test'));
        /*if ($con) {
            echo "connet";
        }*/
        $query = "INSERT INTO users (user_name,email,password)";
        $query .= "VALUES('$name','$email','$pass')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo 'insert';
        } else {
            echo "not insert";
        }
    }
    else{
        echo "please fill up the field";
    }



}

?>

<div class="container mx-auto mt-2">
    <h2 class="bg-success text-center text-white">Information Form</h2>
   <!-- <form action="login.php" method="post">
        Input Name:<input type="text" name="name" placeholder="enter your name" >
        Input Email:<input type="email" name="email" placeholder="enter your email" >
        Input Password:<input type="password" name="password" placeholder="enter your password" >
        <input type="submit" name="submit">
    </form>-->
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Input Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Input Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Input Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
$con = (mysqli_connect('localhost', 'root', '', 'test'));


$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if(isset($_REQUEST['msg']))
{
    echo '<h2 class="bg-warning">Delete Successfully</h2>';
}
if ($count > 0) {
    ?>
    <h2 class="bg-success text-center text-white">Details Information List</h2>
    <table class="table bg-info mx-auto col-md-8">
        <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row['user_id'];
            $name = $row['user_name'];
            $email = $row['email'];
            $count = mysqli_num_rows($result);
            ?>
            <tboday>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    <td><a href="edit.php?id=<?php echo $id ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $id ?>"<>Delete</a></td>
                </tr>
            </tboday>

            <?php
        }
        ?>
    </table>
    <?php
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

