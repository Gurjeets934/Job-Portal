<?php

include "../db.php";
session_start();
if(isset($_POST['sendmessage']))
{ 
    $sender=$_SESSION['email'];
    $message=$_POST['message'];
    $info=$_POST['info'];
    $id=$_GET['id'];
    
    $sql="SELECT * from appliedjobs where id='$id'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $reciever=$row['email'];
    
    if(empty('$message'))
    {
        echo "<script>alert('Message should not be empty.')</script>";
    }
    else
    {
            $sq="INSERT INTO message(sender,reciever,message,optional)values('$sender','$reciever','$message','$info')";
            if($conn->query($sq)===TRUE)
           {
        echo "<script>alert('Message Sent Successfully')</script>";
        echo "<script>window.location='applicants.php'</script>";
            }
          else
          {
          echo "Error".$sql.$conn->error;
           }
     }
 }

else
{
    
}
?>