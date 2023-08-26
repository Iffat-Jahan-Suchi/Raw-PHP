<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $file = $_FILES['image'];
    $fileName = $file['name'];
    $tmp = $file['tmp_name'];
    if (!empty($fileName)) {
        $loc = 'upImages/';
        move_uploaded_file($tmp, $loc . $fileName);
    } else {
        echo "no file";
    }


    if ($name && $email && $pass && $fileName) {
        $con = mysqli_connect('localhost', 'root', '', 'test');
        $query = "INSERT INTO users (user_name,email,password,image)";
        $query .= "VALUES('$name','$email','$pass','$fileName')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "insert successfully";
        } else {
            echo "not insert";
        }
    }


}

?>

<div class="container mx-auto mt-2">
    <h2 class="bg-success text-center text-white">Information Form</h2>

    <form action="login.php" method="post" enctype="multipart/form-data">
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
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Picture</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<!--//fatch/show-->
<?php
$con = (mysqli_connect('localhost', 'root', '', 'test'));


$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if (isset($_REQUEST['msg'])) {
    echo '<h2 class="bg-warning">Delete Successfully</h2>';
}
if (isset($_REQUEST['update'])) {
    echo '<h2 class="bg-warning">Update Successfully</h2>';
}
if ($count > 0) {
    ?>
    <h2 class="bg-success text-center text-white">Details Information List</h2>
    <table class="table bg-info mx-auto col-md-8">
        <thead>
        <tr>

            <th scope="col">SI_No</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <?php
        $serial = 0;
        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row['user_id'];
            $name = $row['user_name'];
            $email = $row['email'];
            $pic = $row['image'];
            $count = mysqli_num_rows($result);

            $serial++;
            ?>
            <tboday>
                <tr>
                    <td><?php echo $serial ?></td>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    <td><img src="upImages/<?php echo $pic; ?>" height="50px" width="50px" alt=""></td>
                    <td><a href="edit.php?id=<?php echo $id ?>">Edit||</a>
                        <a onclick="return confirm('are you sure to delete this')" href="delete.php?id=<?php echo $id ?>&pro_pic=<?php echo $pic; ?>">Delete</a>
                    </td>

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

