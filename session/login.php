<?php
session_start();
if($_SESSION['name']==true)
{
    if((time()-$_SESSION['current_time'])>30)
    {
        header('location:logout.php');
    }
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


