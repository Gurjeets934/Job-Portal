<?php
include "../db.php";
if(isset($_POST['btn']))
{
  $filename=$_FILES['propic']['name'];
  $filetype=$_FILES['propic']['type'];
  $filetmp=$_FILES['propic']['tmp_name'];
  $filesize=$_FILES['propic']['size'];
  $target_file="images/.$filename";
  
  $file_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



  if($file_type!="jpg" && $file_type!="png" && $file_type!="gif")
  {
  echo "<script>alert('Image not uploaded(either you have not uploaded or it is not jpg,png,gif')')</script>";
  // echo "<script>window.location='register.php'</script>";
  }
  
  else
  {
      if($filesize>52453290)
      {
          echo "<script>alert('Image size is too big')</script>";
          // echo "<script>window.location='register.php'</script>";
      }
      else
      {
      if(move_uploaded_file($filetmp,"images/.$filename"))
  {
      echo "<script>alert('Profile has been uploaded successfully')</script>";
  } 
  else
  {
      echo "<script>alert('Please try again')</script>";
      // echo "<script>window.location='register.php'</script>";
  }
      }
  }




    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mothername=$_POST['mothername'];
    $fathername=$_POST['fathername'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
 $sql="INSERT INTO jobseeker(firstname,lastname,mothername,fathername,address,gender,dob,email,password,pic)values('$firstname','$lastname','$mothername','$fathername','$address','$gender','$dob','$email','$password','$target_file')";
 if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Registered Successfully, Login to Continue')</script>";
        echo "<script>window.location='signin.php'</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
} 
else
{
    echo "world";
}
?>