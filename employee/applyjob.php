<?php
include  "../db.php";


if(isset($_POST['btnapply']))
{
 
  // var_dump($_FILES['cv']['name']);

  $filename=$_FILES['cv']['name'];
  $filetype=$_FILES['cv']['type'];
  $filetmp=$_FILES['cv']['tmp_name'];
  $filesize=$_FILES['cv']['size'];
  $target_file="images/$filename";
  
  $file_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



  if($file_type!="pdf" )
  {
  echo "<script>alert('Resume not uploaded(either you have not uploaded or it is not pdf')')</script>";
  // echo "<script>window.location='register.php'</script>";
  }
  
  else
  {
      if($filesize>52453290)
      {
          echo "<script>alert('Resume size is too big')</script>";
          // echo "<script>window.location='register.php'</script>";
      }
      else
      {
      if(move_uploaded_file($filetmp,"images/$filename"))
  {
      echo "<script>alert('Your resume has been uploaded successfully')</script>";
  } 
  else
  {
      echo "<script>alert('Please try again')</script>";
      // echo "<script>window.location='register.php'</script>";
  }
      }
  }

  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $contactno=$_POST['contactno'];
  $appliedid=$_GET['id'];
  $appliedon=$dt;

$sql="INSERT INTO appliedjobs(fullname,email,contactno,appliedon,appliedid,resume)values('$fullname','$email','$contactno','$dt','$appliedid','$target_file')";
if($conn->query($sql)===TRUE)
{
  echo "<script>alert('You have applied job successfully')</script>";
  echo "<script>window.location='home.php'</script>";
}

else
{
  echo "Error".$sql.$conn->error;
}
}
else
{
  echo "Button Not working";
}
  ?>
