<?php 
include "../db.php";
$id=$_GET['id'];
$sql="UPDATE appliedjobs set status='accepted' where id='$id'";
if($conn->query($sql)===TRUE)
{
    echo "<script>alert('Sent acceptance successfully, please send message for further interaction.')</script>";
    echo "<script>window.location='applicants.php'</script>";
}
else
{
echo "Error".$sql.$conn->error;
}
?>