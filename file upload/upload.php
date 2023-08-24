<?php

$myFile=$_FILES['file']['name'];
$tmp=$_FILES['file']['tmp_name'];

if(!empty($myFile))
{
$loc="uploads/";
if(move_uploaded_file($tmp,$loc.$myFile))
{
    echo 'successfull <br>';
    $path=$loc.$myFile;
    echo "<img src='$path' width:'80px'; height: '80px'>";
}
else{
    echo "failed";
}
}
else{
    echo "file not found";
}
?>



