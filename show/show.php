<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <td><a href="">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $id ?>&pic=<?php echo $pic?>"<>Delete</a></td>
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
