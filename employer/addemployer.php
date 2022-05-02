<?php include "../db.php" ?>
<?php 
if(isset($_POST['btn']))
{
  
  $profilename=$_FILES['profile']['name'];
  $profiletype=$_FILES['profile']['type'];
  $profiletmp=$_FILES['profile']['tmp_name'];
  $profilesize=$_FILES['profile']['size'];
  $target_profile="images/.$profilename";

  if(move_uploaded_file($profiletmp,"images/.$profilename"))
  {
      echo "<script>alert('Profile has been uploaded successfully')</script>";
  } 
  else
  {
      echo "<script>alert('Please try again')</script>";
      // echo "<script>window.location='/jobportal/employer/signup.php'</script>";
  }

  $filename=$_FILES['logo']['name'];
  $filetype=$_FILES['logo']['type'];
  $filetmp=$_FILES['logo']['tmp_name'];
  $filesize=$_FILES['logo']['size'];
  $target_file="images/.$filename";
  
  $file_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   


  if($file_type!="jpg" && $file_type!="png" && $file_type!="gif")
  {
  echo "<script>alert('Logo not uploaded(either you have not uploaded or it is not jpg,png,gif')')</script>";
  }
  
  else
  {
      if($filesize>52453290)
      {
          echo "<script>alert('Logo size is too big')</script>";
      }
      else
      {
      if(move_uploaded_file($filetmp,"images/.$filename"))
  {
      echo "<script>alert('Logo has been uploaded successfully')</script>";
  } 
  else
  {
      echo "<script>alert('Please try again')</script>";
      // echo "<script>window.location='/jobportal/employer/signup.php'</script>";
  }
      }
  }




  $sql="INSERT INTO employer(name,email,password,profile,company,logo)values('$_POST[name]','$_POST[email]','$_POST[password]','$target_profile','$_POST[company]','$target_file')";

  if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.location='../index.php'</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
}
?>