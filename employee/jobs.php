<?php
include 'sidebar.php';
?>

<div class="heading bg-light  bg-gradient h-100 w-100 text-center mx-3 mt-2 py-2" id='jobsheading'>
    <h3 class='text-warning mx-3 mt-2'>Applied Jobs </h3>
    <hr class='mx-3'>
    <table class="table align-middle mb-0 bg-light" id='jobstable'> 
  <thead class="bg-light" style="margin:5px 5px 5px 5px;" id='jobshead'>
  
    <tr>
      <th><big>Company</big></th>
      <th><big>Title</big></th>
      <th><big>Category</big></th>
      <th><big>Description</big></th>
      <th><big>Salary</big></th>
      <th><big>Status</big></th>
      <th><big>Action</big></th>
    </tr>
  </thead>
  
      
      <?php 
     
      $company=$_SESSION['jobseekeremail'];

      $sql= "SELECT * from appliedjobs,posts where appliedjobs.appliedid=posts.postid and appliedjobs.email='$email'";
    
      $result=$conn->query($sql);
      function custom_echo($x, $length)
            {
               if(strlen($x)<=$length)
               {
               echo "<p class='card-text'>$x</p>";
               }
               else
               {
               $y=substr($x,0,$length) . "...";
               echo "<p class='card-text'>$y</p>";
               }
            }

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
        <div class='d-flex align-items-center'>
          <img
              src='../employer/".$row['companylogo']."'
              alt=''
              style='width: 45px; height: 45px; margin-top:-2px;'
              class='rounded-circle shadow-2-strong'
              />
              
              </div>
              <p class='fw-normal mt-2'>".$row['company']."</p>
              </td>
              <td>
          
            <p class='fw-bold mb-1'>".$row['title']."</p>
            
        
        
      </td>
      <td>
        <p class='fw-normal mb-1'>".$row['category']."</p>
    
      </td>
      <td>
        <p class='fw-normal mb-1'>
        
        ";
        custom_echo($row['description'],60);
        echo "</p>
      </td>
      <td><p class='fw-normal mb-1'>".$row['salary']."</p></td>
      
        <td>
        <p class='fw-normal mb-1'>".$row['status']."</p>
        </td>
        <td>
        <p class='fw-normal mb-1'><a href='viewjob.php?id=$postid' class='btn btn-warning btn-sm btn-rounded mb-1'>View</a></p>
        <p calss='fw-normal mb-1'><a href='editjob.php?id=$id' class='btn btn-primary btn-sm btn-rounded mb-1'>Edit</a></p>
        <p class='text-muted mb-0'><a href='deletejob.php?id=$id' class='btn btn-danger btn-sm btn-rounded'>Delete</a></p>
      </td>
    </tr>
    </tbody>";
          }
        }
    
    ?>
</table>
</div>
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
    document.getElementById('dropdownUser1').classList.toggle('text-white');
    document.getElementById('navtitle').classList.toggle('text-white');
    document.getElementById('jobsheading').classList.toggle('bg-dark');
    document.getElementById('jobstable').classList.toggle('bg-dark');
    document.getElementById('jobstable').classList.toggle('text-white');
    document.getElementById('jobshead').classList.toggle('bg-dark');
    document.getElementById('jobshead').classList.toggle('text-white');
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