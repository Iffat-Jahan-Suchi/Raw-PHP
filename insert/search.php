<?php
$con = mysqli_connect('localhost', 'root', '', 'test');
if (isset($_REQUEST['search'])) {
    $name = $_REQUEST['name'];
    $query = "SELECT * FROM users WHERE user_name='$name'";
    echo $query;
    $result=mysqli_query($con,$query);
   $count=mysqli_num_rows($result);
   if($count>0)
   {
       ?>
<table class="table bg-info">
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Edit</th>
        <th scope="col">Email</th>
        <th scope="col">pic</th>
    </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {

    $id = $row['user_id'];
    $name = $row['user_name'];
    $email = $row['email'];
    $pic = $row['image'];
    $count = mysqli_num_rows($result);
    ?>
    <tboday>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
        </tr>
    </tboday>
    <?php

   }
   ?>
</table>
<?php
}
}
?>


<form action="show.php" method="post">
    <input type="text" name="name" placeholder="enter search user">
    <input type="submit" name="search" value="search">
</form>
