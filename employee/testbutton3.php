<?php

include "../db.php";
if(isset($_POST['btnapply']))
{
    var_dump($_FILES['cv']['name']);

//   $filename=$_FILES['cvfile']['name'];
//   $filetype=$_FILES['cvfile']['type'];
//   $filetmp=$_FILES['cvfile']['tmp_name'];
//   $filesize=$_FILES['cvfile']['size'];
//   $target_file="images/$filename";
  
//   $file_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



//   if($file_type!="pdf" )
//   {
//   echo "<script>alert('Resume not uploaded(either you have not uploaded or it is not pdf')')</script>";
//   // echo "<script>window.location='register.php'</script>";
//   }
  
//   else
//   {
//       if($filesize>52453299)
//       {
//           echo "<script>alert('Resume size is too big')</script>";
//           // echo "<script>window.location='register.php'</script>";
//       }
//       else
//       {
//       if(move_uploaded_file($filetmp,"images/$filename"))
//   {
//       echo "<script>alert('Your resume has been uploaded successfully')</script>";
//   } 
//   else
//   {
//       echo "<script>alert('Please try again')</script>";
//       // echo "<script>window.location='register.php'</script>";
//   }
//       }
//   }
}
else
{
    echo 'button not working';
}


?>