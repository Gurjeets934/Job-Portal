<?php
include 'sidebar.php';
?>
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(147, 240, 251, 1), rgba(87, 245, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(147, 240, 251, 1), rgba(87, 240, 108, 1))
}
    </style>
    <?php
    
    $email=$_SESSION['email'];
    $sql="SELECT * FROM employer where email='$email'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
  
    echo "<div class='card text-white gradient-custom py-3 ' style='height:850px; width:600px;padding:10px 10px 10px 10px; margin:20px 100px 100px 350px'>
    <h2 class='text-center'>Edit  Profile</h2>
    <hr>
    <div class='row mt-2 border-bottom mx-2 py-3' style='border:2px solid white'>
    <form class='mx-1 mx-md-4' action='' method='post' enctype='multipart/form-data'>

        <table>
        
        <tr>
        <th>
        <p class='text-center fw-bold fs-5'>Profile Pic:</p></th>
        ";
        if($row['profile']==NULL || $row['profile']=='images/.')
{
    echo "<td><p class='text-start fs-normal fs-6'>
    <img src='images/.employer.png' width='100px' height='100px' class='shadow-strong-3 rounded-circle'/>
</p>Update profile pic <input type='file' name='profile' class='form-control'/></td>";
}
else
{
   echo" <td><p class='text-start fs-normal fs-6 ' style='margin-bottom:30px'>
        <img src='".$row['profile']."' width='100px' height='100px' class='shadow-strong-3 rounded-circle'/>
    </p>
    Update profile pic <input type='file' name='profile' class='form-control'/>
    </td>";
}

       echo "
       </tr>
    
    <tr><th><p class='text-center fw-bold  fs-5'>Full Name:</p></th>
    <td><input type='text' class='form-control' name='name' value='".$row['name']."' />
    </td></tr>
    
    <tr><th><p class='text-center fw-bold fs-5'>Email</p></th>
    <td><input type='text' class='form-control' name='email' value='".$row['email']."'/>
    </td>
    </tr>
  
    <tr>
        <th>
        <p class='text-center fw-bold fs-5'>Profile Pic:</p></th>
        ";
        if($row['logo']==NULL || $row['logo']=='images/.')
{
    echo "<td><p class='text-start fs-normal fs-6'>
    <img src='images/.logo.jpg' width='100px' height='100px' class='shadow-strong-3 rounded-circle'/>
</p>Update profile pic <input type='file' name='logo' class='form-control'/></td>";
}
else
{
   echo" <td><p class='text-start fs-normal fs-6 ' style='margin-bottom:30px'>
        <img src='".$row['logo']."' width='100px' height='100px' class='shadow-strong-3 rounded-circle'/>
    </p>
    Update profile pic <input type='file' name='logo' class='form-control'/>
    </td>";
}

       echo "
       </tr>
       <tr>
       <th>
       <p class='text-center fw-bold fs-5'>Company Name:</p></th>
   
   <td><input type='text' class='form-control' name='company' value='".$row['company']."'/></td>
   </tr>

    </table>
    <center><button type='submit' name='updateprofile' class='btn btn-success btn-lg mt-2'>Update</button>
    </center>
    </form>
</div>

</div>";
?>
<?php
if(isset($_POST['updateprofile']))
{
    // var_dump($_FILES['profile']);
    $email=$_SESSION['email'];
    $sql="SELECT id FROM employer where email='$email'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $id=$row['id'];

    $filename=$_FILES['profile']['name'];
  $filetype=$_FILES['profile']['type'];
  $filetmp=$_FILES['profile']['tmp_name'];
  $filesize=$_FILES['profile']['size'];
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

  $name=$_POST['name'];
  $email=$_POST['email'];
  $company=$_POST['company'];
  

    $logoname=$_FILES['logo']['name'];
  $logotype=$_FILES['logo']['type'];
  $logotmp=$_FILES['logo']['tmp_name'];
  $logosize=$_FILES['logo']['size'];
  $logotarget_file="images/.$logoname";
  
  $logofile_type= strtolower(pathinfo($logotarget_file,PATHINFO_EXTENSION));



  if($logofile_type!="jpg" && $logofile_type!="png" && $logofile_type!="gif")
  {
  echo "<script>alert('Logo not uploaded(either you have not uploaded or it is not jpg,png,gif')')</script>";
  // echo "<script>window.location='register.php'</script>";
  }
  
  else
  {
      if($logosize>52453290)
      {
          echo "<script>alert('Logo size is too big')</script>";
          // echo "<script>window.location='register.php'</script>";
      }
      else
      {
      if(move_uploaded_file($logotmp,"images/.$logoname"))
  {
      echo "<script>alert('Logo has been uploaded successfully')</script>";
  } 
  else
  {
      echo "<script>alert('Please try again')</script>";
      // echo "<script>window.location='register.php'</script>";
  }
      }
  }





    // print_r($filename);
    // var_dump(is_null($filename));
    if(($target_file=='images/.') && ($logotarget_file=='images/.'))
    {
        $sql="UPDATE employer set name='$name',email='$email', company='$company' where id='$id'  ";
    }
    if(($target_file=='images/.') && ($logotarget_file!='images/.'))
    {
        $sql="UPDATE employer set name='$name',email='$email', company='$company', logo='$logotarget_file' where id='$id'  ";
    }
    if(($target_file!='images/.') && ($logotarget_file=='images/.'))
    {
        $sql="UPDATE employer set name='$name',email='$email', company='$company', profile='$target_file' where id='$id'  ";
    }
  
    else
    {
        $sql="UPDATE employer set name='$name',email='$email', company='$company', logo='$logotarget_file',profile='$target_file' where id='$id'  ";
    }
    
    
    if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Updated Successfully')</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }

    // echo 'Button Working';
}