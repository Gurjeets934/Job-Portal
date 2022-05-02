<?php

include "../db.php";
session_start();
if(isset($_POST['sendreply']))
{ 
    $sender=$_SESSION['jobseekeremail'];
    $reply=$_POST['reply'];
    
    $id=$_GET['id'];
    
    $sql="SELECT * from message where id='$id'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $reciever=$row['sender'];
    
    if(empty('$reply'))
    {
        echo "<script>alert('Reply should not be empty.')</script>";
    }
    else
    {
            $sq="INSERT INTO repy(sender,reciever,reply)values('$sender','$reciever','$reply')";
            if($conn->query($sq)===TRUE)
           {
        echo "<script>alert('Reply Sent Successfully')</script>";
        echo "<script>window.location='messages.php'</script>";
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