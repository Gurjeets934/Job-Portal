<?php

include 'sidebar.php'

?>

       <?php
       $id=$_GET['id'];
       $sql="SELECT * FROM appliedjobs where id='$id'";
       $result=$conn->query($sql);
       $row=$result->fetch_assoc();
          echo "
           <div class='modal-body'>
           <section class='vh-100' style='background-color: #2779e2; padding-left:10px; padding-right:10px;' >
       <div class='container h-100'  >
         <div class='row d-flex justify-content-center align-items-center h-100'>
           <div class='col-xl-12'>
     
             <h1 class='text-white mb-4'>Edit Job Form:</h1>
            
             <div class='card' style='border-radius: 15px; margin-bottom:20px;'>
               <div class='card-body'>
               <form action='' enctype='multipart/form-data' method='post'>
                 <div class='row align-items-center pt-4 pb-3'>
                   <div class='col-md-4 ps-5'>
     
                     <h6 class='mb-0'>Full name</h6>
     
                   </div>
                   <div class='col-md-8 pe-5'>
     
                     <input type='text' name='fullname'
                     value='".$row['fullname']."'  class='form-control form-control-lg' />
     
                   </div>
                 </div>
     
                 <hr class='mx-n3'>
     
                 <div class='row align-items-center py-3'>
                   <div class='col-md-4 ps-5'>
     
                     <h6 class='mb-0'>Email address</h6>
     
                   </div>
                   <div class='col-md-8 pe-5'>
     
                     <input type='email' value='".$row['email']."' name='email'
                     class='form-control form-control-lg' placeholder='Enter your email' />
     
                   </div>
                 </div>
     
                 <hr class='mx-n3'>
     
                 <div class='row align-items-center py-3'>
                   <div class='col-md-4 ps-5'>
     
                     <h6 class='mb-0'>Contact Number</h6>
     
                   </div>
                   <div class='col-md-8 pe-5'>
     
                     <input type='text' name='contactno' value='".$row['contactno']."'
                     class='form-control form-control-lg' placeholder='Enter your contact number'>
                   
                   </div>
                 </div>
                       <div class='row align-items-center py-3'>
                       <div class='col-md-3 ps-5'>
                       <h6 class='mb-0'>Upload CV</h6>
                       </div>
                       <div class='col-md-9 pe-5'>
                       <input type='file'   name='cv' value='".$row['resume']."' class='form-control form-control-lg' />
                       <div class='small text-muted mt-2'>Upload Your Resume/CV.</div>
                     </div>
                   </div>
                   <hr class='mx-n3'>
     
                       <div class='px-5 py-4'>
                       <button type='submit' name='btnapply'
                       class='btn btn-primary btn-lg'>Update Information</button>
                         </div> 
         
               </form>
                 
                 

         
                
              </div>
             </div>
     
           </div>
         </div>
       </div>
     </section>
     
           </div>";?>
           <?php
if(isset($_POST['btnapply']))
{
    $id=$_GET['id'];
    $filename=$_FILES['cv']['name'];
  $filetype=$_FILES['cv']['type'];
  $filetmp=$_FILES['cv']['tmp_name'];
  $filesize=$_FILES['cv']['size'];
  $target_file="images/.$filename";
//   var_dump($filename);
  $file_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



  if($file_type!="pdf" )
  {
  echo "<script>alert('File not uploaded(either you have not uploaded or it is not pdf')')</script>";
  // echo "<script>window.location='register.php'</script>";
  }
  
  else
  {
      if($filesize>52453290)
      {
          echo "<script>alert('File size is too big')</script>";
          // echo "<script>window.location='register.php'</script>";
      }
      else
      {
      if(move_uploaded_file($filetmp,"images/.$filename"))
  {
      echo "<script>alert('File has been uploaded successfully')</script>";
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
    $resume=$target_file;
       
    if($target_file=='images/.')
    {
    $sql="UPDATE appliedjobs set fullname='$fullname', email='$email', contactno='$contactno' where id='$id'";
}
else
{
    $sql="UPDATE appliedjobs set fullname='$fullname', email='$email', contactno='$contactno', resume='$target_file' where id='$id'";
 
}
if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Updated Successfully')</script>";
    }
  else
  {
    echo "Error".$sql.$conn->error;
  }
}
           ?>
    