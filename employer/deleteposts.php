<?php
include '../db.php';

$id=$_GET['id'];
$sql="DELETE FROM posts where postid='$id'";

if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Post Deleted Successfully')</script>";
        echo "<script>window.location='viewposts.php'</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
?>
