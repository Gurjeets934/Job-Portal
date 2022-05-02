<?php
include "header.php";
?>

<div class='row gradient-custom-1' style=' margin-top:0px; margin-bottom:30px; margin-left:250px; margin-right:290px; padding-top: 100px;'  id='postcard'>
<?php 
 $id=$_GET['id'];
 $sql="SELECT * FROM posts where postid='$id'";
 $result=$conn->query($sql);
 $row=$result->fetch_assoc();
 echo "<div  class='card mb-3 col-md-3 text-black bg-light' style='max-width:800px; width:750px; margin-left:40px;  margin-top:10px; margin-bottom:10px;'>
   <div class='row g-0'>
   <div class='col-md-3'>
   <img src='../employer/".$row['companylogo']."' height='70px' width='70px' style='margin-top:10px; margin-left:10px;' >
     </div>
     <div class='col-md-9'>
       <div class='card-body'>
         <h5 class='card-title'>".$row['title']."</h5>
         <hr>
         <h6 class='card-title'>".$row['company']."</h6>
         <p class='card-text'>
         <small class='card-text '>💼 ".$row['experience']."</small><br>
         <small class='card-text'>💸 ".$row['salary']."</small><br>
         <small class='card-text'>📌 ".$row['location']."</small>
         </p>
         <p class='fs-5'>".$row['description']."</p>
<button type='button' class='btn btn-primary bg-gradient' data-mdb-toggle='modal' data-mdb-target='#exampleModal'>
         Apply For Job
       </button>
   
      
       <div class='modal fade'  id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
       <div class='modal-dialog'> 
       <div class='modal-content' style='width:600px;'>
       
       
       
           <div class='modal-header '>
             <h5 class='modal-title' id='exampleModalLabel'>Apply For Job</h5>
             <button type='button' class='btn-close' data-mdb-dismiss='modal' aria-label='Close'></button>
           </div>
           <div class='modal-body'>
           <section class='vh-100' style='background-color: #2779e2; padding-left:10px; padding-right:10px;' >
       <div class='container h-100'  >
         <div class='row d-flex justify-content-center align-items-center h-100'>
           <div class='col-xl-12'>
     
             <h1 class='text-white mb-4'>Application Form:</h1>
            
             <div class='card' style='border-radius: 15px; margin-bottom:20px;'>
               <div class='card-body'>
               <form action='applyjob.php?id=$id' enctype='multipart/form-data' method='post'>
                 <div class='row align-items-center pt-4 pb-3'>
                   <div class='col-md-4 ps-5'>
     
                     <h6 class='mb-0'>Full name</h6>
     
                   </div>
                   <div class='col-md-8 pe-5'>
     
                     <input type='text' name='fullname'
                     placeholder='Enter your full name' class='form-control form-control-lg' />
     
                   </div>
                 </div>
     
                 <hr class='mx-n3'>
     
                 <div class='row align-items-center py-3'>
                   <div class='col-md-4 ps-5'>
     
                     <h6 class='mb-0'>Email address</h6>
     
                   </div>
                   <div class='col-md-8 pe-5'>
     
                     <input type='email' name='email'
                     class='form-control form-control-lg' placeholder='Enter your email' />
     
                   </div>
                 </div>
     
                 <hr class='mx-n3'>
     
                 <div class='row align-items-center py-3'>
                   <div class='col-md-4 ps-5'>
     
                     <h6 class='mb-0'>Contact Number</h6>
     
                   </div>
                   <div class='col-md-8 pe-5'>
     
                     <input type='text' name='contactno' 
                     class='form-control form-control-lg' placeholder='Enter your contact number'>
                   
                   </div>
                 </div>
                       <div class='row align-items-center py-3'>
                       <div class='col-md-3 ps-5'>
                       <h6 class='mb-0'>Upload CV</h6>
                       </div>
                       <div class='col-md-9 pe-5'>
                       <input type='file'   name='cv'  class='form-control form-control-lg' />
                       <div class='small text-muted mt-2'>Upload Your Resume/CV.</div>
                     </div>
                   </div>
                   <hr class='mx-n3'>
     
                       <div class='px-5 py-4'>
                       <button type='submit' name='btnapply'
                       class='btn btn-primary btn-lg'>Send application</button>
                         </div> 
         
               </form>
                 
                 

         
                
              </div>
             </div>
     
           </div>
         </div>
       </div>
     </section>
     
           </div>
           <div class='modal-footer'>
             <button type='button' class='btn btn-primary' data-mdb-dismiss='modal'>Close</button>
             <button type='button' class='btn btn-secondary'>Save changes</button>
           </div>
         </div>
       </div>
     </div>

     </div>
     </div>
     
     
   </div>
 </div> 
</div>";
?>
</div>

<script type='text/javascript' src='js/mdb.min.js'></script>
<script type='text/javascript'>
   
   function toggler(){
     var text = document.getElementById('darkmodeelse');
   if(text.innerText == '🌙') 
    {
      text.innerText ='☀️';
      localStorage.clear();
      localStorage.setItem('toggle','dark');
     }
   else
    {
      text.innerText='🌙';
      localStorage.clear();
      localStorage.setItem('toggle','light');
    }
    document.getElementById('change').classList.toggle('bg-dark');
    document.getElementById('change').classList.toggle('navbar-dark');
    document.getElementById('darkmodeelse').classList.toggle('btn-white');
    document.getElementById('body').classList.toggle('bg-dark');
    // document.getElementById('search-focus').classList.toggle('text-white');
    // document.getElementById('searchlabel').classList.toggle('text-white');
    // document.getElementById('searchbutton').classList.toggle('btn-secondary');
    document.getElementById('postcard').classList.toggle('gradient-custom-2');
    document.getElementById('signbtn').classList.toggle('btn-secondary');
    // document.getElementById('loginbtn').classList.toggle('btn-secondary');
    }
 
    function mode()
   {
     var mode = localStorage.getItem('toggle');
     if(mode=='light')
     {
 
     }
     else
     {
 
     }
     if(mode=='dark')
     {
     toggler();
     }
     
   }
 </script>