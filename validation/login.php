<?php
if(isset($_REQUEST['wrongPass']))
echo $_REQUEST['wrongPass'];
?>
<form action="index.php" method="post">

    email:<input type="email" name="email">
    pass:<input type="password" name="password">
    <input type="submit" value="submit">

</form>