<?php

$con=mysqli_connect('localhost','root','','test');
if(!$con)
{
    die().mysqli_error();
}

$query="SELECT * FROM users";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
    ?>
    <form action="send.php" method="post">
        <table>
            <thead>
            <tr>
                <th>DB Id</th>
                <th>EMAIL</th>
                <th><input type="submit" value="send_mail" name="sendEmail"></th>
            </tr>
            </thead>
            <?php

            while($row=mysqli_fetch_assoc($result))
            {
                 $id=$row['user_id'];
                 $name=$row['user_name'];
                 $email=$row['email'];
                ?>
                <tbody>
                <tr>
                    <td><?php echo $id?></td>
                    <td><center><?php echo $name ?></center></td>
                    <td><center><input type="checkbox" name="data[]" value="<?php echo $id ?>"></center></td>
                </tr>
                </tbody>
                <?php
            }
            ?>




        </table>
    </form>


<?php
 
}