<?php
session_start();
if($_SESSION['name']==true)
{
    echo $_SESSION['name'];

?>
<br>

<a href="logout.php">Logout</a>
<?php

}
else{
    header("location:index.php");
}

?>


