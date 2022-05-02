<?php
include '../db.php';
$id=$_GET['id'];
$sql="DELETE FROM message where id='$id'";
if($conn->query($sql)===TRUE)
{
    echo "<script>alert('Message Deleted Successfully')</script>";
    echo "<script>window.location='messages.php'</script>";
}
else
{
echo "Error".$sql.$conn->error;
}

?>