<?php
include 'sidebar.php';
?>

<div class="heading bg-light  bg-gradient h-100 w-100 text-center mx-3 mt-2 py-2" id='jobsheading'>
    <h3 class='text-warning mx-3 mt-2'>Dashboard </h3>
    <hr class='mx-3'>
    <table class="table align-middle mb-0 bg-light" id='jobstable'> 
  <thead class="bg-light" style="margin:5px 5px 5px 5px;" id='jobshead'>
  
    <tr>
      <th><big>No of Added Posts</big></th>
      <th><big>View Added Posts</big></th>
      <th><big>No of Applicants</big></th>
      <th><big>View Applicants</big></th>
      <th><big>No of Messages</big></th>
      <th><big>View Messages</big></th>
      
    </tr>
  </thead>
  <tbody>
      <tr>
          <td>
      <?php 
      $email =$_SESSION['email'];
         $sql="SELECT COUNT(*) FROM posts,employer where posts.company=employer.company and employer.email='$email'";

     $result=$conn->query($sql);
     $count=$result->fetch_assoc();
     echo $count['COUNT(*)'];
    ?>
    </td>
    <td>
        <a class='btn btn-link btn-sm btn-rounded' href='viewposts.php'>View</a>
</td>
<td>
      <?php 
    //   session_start();
      $company=$_SESSION['company'];
      $sql= "SELECT COUNT(*) from appliedjobs,posts where appliedjobs.appliedid=posts.postid and posts.company='$company'";

     $result=$conn->query($sql);
     $count=$result->fetch_assoc();
     echo $count['COUNT(*)'];
    ?>
    </td>
    <td>
        <a class='btn btn-link btn-sm btn-rounded' href='applicants.php'>View</a>
</td>
<td>
      <?php 
    //   session_start();
      $email=$_SESSION['email'];
     $sql="SELECT COUNT(*) from repy where reciever='$email'";
     $result=$conn->query($sql);
     $count=$result->fetch_assoc();
     echo $count['COUNT(*)'];
    ?>
    </td>
    <td>
        <a class='btn btn-link btn-sm btn-rounded' href='checkreply.php'>View</a>
</td>
</tr>
</tbody>
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
    document.getElementById('navitem6').classList.toggle('text-white');
    document.getElementById('navitem6').classList.toggle('bg-dark');
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