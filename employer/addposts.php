<?php
session_start();
include "../db.php";
if(isset($_POST['btn']))
{ 
  $title=$_POST['title'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $salary=$_POST['salary'];
  $experience=$_POST['experience'];
  $company=$_SESSION['company'];
  $location=$_POST['location'];

  $sl="SELECT * FROM EMPLOYER WHERE email='$_SESSION[email]'";
  $result=$conn->query($sl);
  $row=$result->fetch_assoc();
  $logo=$row['logo'];

  $sql="INSERT INTO posts(title,description,date,category,salary,experience,company,location,companylogo)values('$title','$description','$dt','$category','$salary','$experience','$company','$location','$logo')";
  if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Job Posted Successfully')</script>";
        echo "<script>window.location='home.php'</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
}
else
{
  echo "<h1>Posts not added.</h1>";
}
?>