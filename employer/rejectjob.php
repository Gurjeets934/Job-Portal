<?php 
include "../db.php";
$id=$_GET['id'];
$sql="UPDATE appliedjobs set status='rejected' where id='$id'";
if($conn->query($sql)===TRUE)
{
    echo "<script>alert('Applicant rejected for the job, kindly give reason for the same via message below.')</script>";
    echo "<script>window.location='applicants.php'</script>";
}
else
{
echo "Error".$sql.$conn->error;
}
?>