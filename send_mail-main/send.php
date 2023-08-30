<?php

$con=mysqli_connect('localhost','root','','test');
if(isset($_POST['sendEmail']))
{
     $sendData=$_POST['data'];
     $stringData=implode(',',$sendData);
}
$query="SELECT * FROM users WHERE users.user_id in($stringData)";

$result=mysqli_query($con,$query);
if($result==true)
{
    while ($row=mysqli_fetch_assoc($result))
    {
        $email_send_to= $row['email'];
        $subject="simple test";
        $body="hello there...";
        $header="iffatjahan046@gmail.com";
        if(mail($email_send_to,$subject,$body,$header))
        {
            echo "your mail send successfully";
        }else{
            echo "failed";
        }
    }
}
