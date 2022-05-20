<?php
include "../db.php";
if(isset($_POST['btn']))
{ 
  $title=$_POST['title'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $salary=$_POST['salary'];
  $experience=$_POST['experience'];
  $location=$_POST['location'];
  $id=$_GET['id'];
  $sql="UPDATE posts set title='$title',description='$description',category='$category',salary='$salary',experience='$experience',location='$location' where postid='$id'";
  if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Post Updated Successfully')</script>";
        echo "<script>window.location='viewposts.php'</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
}
else
{
  echo "<h1>Button Not working</h1>";
}
?>