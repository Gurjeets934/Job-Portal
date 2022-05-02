<?php
include 'sidebar.php';
?>

<div class="heading bg-light  bg-gradient h-100 w-100 text-center mx-3 mt-2 py-2" id='messageheading'>
    <h3 class='text-warning mx-3 mt-2'>Messages Recieved </h3>
    <hr class='mx-3'>
    <table class="table align-middle mb-0 bg-light" id='messagetable'> 
  <thead class="bg-light" style="margin:5px 5px 5px 5px;" id='messagehead'>
    <tr>
      <th><big>Sender</big></th>
      <th><big>Message</big></th>
      <th><big>Action</big></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $email=$_SESSION['email'];
    $sql="SELECT * FROM repy where reciever='$email'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc()){
          $id=$row['id'];
      echo "<tr>
      <td class='fw-normal mb-1'>".$row['sender']."</td>
      <td class='fw-normal mb-1'>".$row['reply']."</td>
      
      <td class='fw-normal mb-1'>
      <button type='button' class='btn btn-warning btn-sm btn-rounded mb-1' data-mdb-toggle='modal' data-mdb-target='#exampleModal$id'>Reply</button>
      <p class='text-muted mb-1'><a href='#' class='btn btn-danger btn-sm btn-rounded'>Delete</a></p>

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
      </tr>";
      }
    }
    ?>
</tbody>
</table>



</div>
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