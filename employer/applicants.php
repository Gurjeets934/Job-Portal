<?php
include "sidebar.php";
?>
<!-- <head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
   
<style>
    .gradient-custom-2 {
  /* fallback for old browsers */
  background: #a1c4fd;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}
    </style>
 <link rel="stylesheet" href="css/mdb.min.css" /> 
    </head> -->
<body>
<div class="heading bg-light  bg-gradient h-100 w-100 text-center mx-3 mt-2 py-2" id='viewheading'>
    <h3 class='text-primary mx-3 mt-2'>Applications Recieved:</h3>
    <hr class='mx-3'>
    <table class="table align-middle mb-0 bg-light" id='viewtable'>
  <thead class="bg-light " style="margin:5px 5px 5px 5px;" id='tablehead'>
    <tr>
      
      <th><big>Name</big></th>
      <th><big>Email</big></th>
      <th><big>Job Details</big></th>
      <th><big>Contact No</big></th>
      <th><big>Resume/CV</big></th>
      <th><big>Job Status</big></th>
      <th><big>Action</big></th>
    </tr>
  </thead>
  
      
      <?php 
      $count=0;
      $company=$_SESSION['company'];

      $sql= "SELECT * from appliedjobs,posts where appliedjobs.appliedid=posts.postid and posts.company='$company'";
      
      $result=$conn->query($sql);

      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
            $file=$row['resume'];
            $id=$row['id']; 
            $postid=$row['postid'];
            
    echo "
    <tbody style='margin:5px 5px 5px 5px;'>
    <tr>
      
              <td>
          
            <p class='fw-bold mb-1'>".$row['fullname']."</p>
            </td>
            <td>
            <p class='fw-normal mb-0'>".$row['email']."</p>
        
        
      </td>
      <td>
        <a href='showposts.php?id=$postid' class='btn btn-success btn-sm btn-rounded'>Show</a>

      </td>
      <td>
        <p class='fw-normal mb-1'>".$row['contactno']."</p>
      </td>
      <td><a href='downloadresume.php?file=$file' class='btn btn-link btn-sm btn-rounded'>View</a></td>
      
        <td>
        <p class='fw-bold mb-1'>".$row['status']."</p>
        </td>
        <td>
        <p class='fw-normal mb-1'><a href='acceptjob.php?id=$id' class='btn btn-danger btn-sm btn-rounded'>Accept</a></p>
        <p class='text-muted mb-1'><a href='rejectjob.php?id=$id' class='btn btn-primary btn-sm btn-rounded'>Reject</a></p>
        <button type='button' class='btn btn-warning btn-sm btn-rounded' data-mdb-toggle='modal' data-mdb-target='#exampleModal$id'>Message</button>
        <div class='modal fade'  id='exampleModal$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'> 
        <div class='modal-content' style='width:600px; height:650px'>
        
        
        
            <div class='modal-header '>
              <h5 class='modal-title text-warning' id='exampleModalLabel'>Contact Jobseeker</h5>
              <button type='button' class='btn-close' data-mdb-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
  
        <div class='container h-100' style='background-color: #2779e2; padding-left:10px;  padding-top:20px'>

             
              <div class='card' style='border-radius: 15px; margin-bottom:20px;'>
                <div class='card-body'>
                <h6 class=' mb-0 text-center text-black'>Message to jobseeker</h6>
                <hr class='mx-n3 text-dark' >
                <form action='message.php?id=$id' enctype='multipart/form-data' method='post'>
                   
                  <div class='row align-items-center py-3'>
                    <div class='col-md-3 ps-5 '>
      
                      <h6 class='mb-0 text-black'>Message</h6>
      
                    </div>
                    <div class='col-md-9 pe-5'>
      
                    <textarea class='form-control ' name='message' rows='5' placeholder='Type your message'></textarea>
      
                    </div>
                  </div>
      
      
      
                  <div class='row align-items-center py-3'>
                    <div class='col-md-3 ps-5'>
      
                      <h6 class='mb-0 text-black'>Note</h6>
      
                    </div>
                    <div class='col-md-9 pe-5'>
      
                      <input type='text' name='info' 
                      class='form-control form-control-lg' placeholder='Enter the information'>
                    
                    </div>
                  </div>
                    
      
                        <div class='px-5 py-4'>
                        <button type='submit' name='sendmessage'
                        class='btn btn-primary btn-lg'>Send Message</button>
                          </div> 
          
                </form>
                </div>                      
                </div>
                </div>          
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-primary' data-mdb-dismiss='modal'>Close</button>
              <button type='button' class='btn btn-secondary'>Save changes</button>
            </div>
          </div>
        </div>
</td>

</tr>
</tbody>";
          }
        }
?>

</table>
</div>

        
</body>
<script type='text/javascript' src='js/mdb.min.js'>
  </script>
  <script type='text/javascript'>
   
   function toggler(){
     var text = document.getElementById('darkmode');
   if(text.innerText == 'Enable Dark Mode') 
    {
      text.innerText ='Enable Light Mode';
      localStorage.clear();
      localStorage.setItem('toggle','dark');
     }
   else
    {
      text.innerText='Enable Dark Mode';
      localStorage.clear();
      localStorage.setItem('toggle','light');
    }
    document.getElementById('bodybg').classList.toggle('gradient-custom-2');
    document.getElementById('dropdown').classList.toggle('dropdown-menu-dark');
    document.getElementById('sidenav').classList.toggle('bg-dark');
    document.getElementById('sidenav').classList.toggle('text-white');
    document.getElementById('navitem').classList.toggle('text-white');
    document.getElementById('navitem').classList.toggle('bg-dark');
    document.getElementById('navitem2').classList.toggle('text-white');
    document.getElementById('navitem2').classList.toggle('bg-dark');
    document.getElementById('navitem3').classList.toggle('text-white');
    document.getElementById('navitem3').classList.toggle('bg-dark');
    document.getElementById('navitem4').classList.toggle('text-white');
    document.getElementById('navitem4').classList.toggle('bg-dark');
    document.getElementById('navitem5').classList.toggle('text-white');
    document.getElementById('navitem5').classList.toggle('bg-dark');
    document.getElementById('navitem6').classList.toggle('text-white');
    document.getElementById('navitem6').classList.toggle('bg-dark');
    document.getElementById('dropdownUser1').classList.toggle('text-white');
    document.getElementById('navtitle').classList.toggle('text-white');
    document.getElementById('viewheading').classList.toggle('bg-dark');
    document.getElementById('viewtable').classList.toggle('bg-dark');
    document.getElementById('tablehead').classList.toggle('bg-dark');
    document.getElementById('viewtable').classList.toggle('text-white');
    document.getElementById('tablehead').classList.toggle('text-white');

    
    }
 
    function darkmode()
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
</html>