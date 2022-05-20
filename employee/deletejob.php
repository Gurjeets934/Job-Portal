<?php
include '../db.php';

$id=$_GET['id'];
$sql="DELETE FROM appliedjobs where id='$id'";

if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Deleted Job Successfully')</script>";
        echo "<script>window.location='jobs.php'</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
?>
