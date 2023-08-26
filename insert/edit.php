<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
if(isset($_REQUEST['id']))
{
    $editId=$_REQUEST['id'];
}

$con = (mysqli_connect('localhost', 'root', '', 'test'));
$query="SELECT * FROM users WHERE users.user_id=$editId";


$result=mysqli_query($con,$query);

while ($row=mysqli_fetch_assoc($result))
{
    $name= $row['user_name'];
     $email=$row['email'];
     $pass=$row['password'];
}


?>

<div class="container mx-auto mt-2">
    <div class="row">
        <div class="">
            <form action="update.php" method="post">
                <h2 class="text-center text-info">Edit Info</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Input Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Input Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email?>" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Input Password</label>
                    <input type="password" class="form-control"  value="<?php  echo $pass?>" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit"  name="submit" value="submit" class="btn btn btn-outline-primary form-control">Update Data</button>
                <input type="hidden" name="editId" value="<?php echo $editId?>">
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>