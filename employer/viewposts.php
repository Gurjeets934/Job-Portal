<?php
include 'sidebar.php';
?>

<div class="heading bg-light bg-gradient h-100 w-100 text-center mx-3 mt-2 py-2" id='postsheading'>
    <h3 class='text-warning mx-3 mt-2'>Posts Details</h3>
    <hr class='mx-3'>
<table class="table align-middle mb-0 bg-light" id='posttable'> 
  <thead class="bg-light" style="margin:5px 5px 5px 5px;" id='posthead'>
    <tr>
      <th><big>Title</big></th>
      <th><big>Description</big></th>
      <th><big>Category</big></th>
      <th><big>Experience</big></th>
      <th><big>Salary</big></th>
      <th><big>Location</big></th>
      <th><big>Actions</big></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $email=$_SESSION['email'];
    $sql="SELECT * FROM posts,employer where posts.company=employer.company and employer.email='$email'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc()){
      echo "<tr>
      <td class='fw-normal mb-1'>".$row['title']."</td>
      <td class='fw-normal mb-1'>".$row['description']."</td>
      <td class='fw-normal mb-1'>".$row['category']."</td>
      <td class='fw-normal mb-1'>".$row['experience']."</td>
      <td class='fw-normal mb-1'>".$row['salary']."</td>
      <td class='fw-normal mb-1'>".$row['location']."</td>
      <td><p class='fw-normal   mb-1'><a href='#' class='btn btn-warning btn-sm btn-rounded'>View</a></p>
      <p class='text-muted mb-1'><a href='#' class='btn btn-primary btn-sm btn-rounded'>Edit</a></p>
      <p class='text-muted mb-1'><a href='#' class='btn btn-danger btn-sm btn-rounded'>Delete</a></p>
      </td>
      </tr>";
      }
    }
    ?>
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
    document.getElementById('postsheading').classList.toggle('bg-dark');
    document.getElementById('posttable').classList.toggle('bg-dark');
    document.getElementById('posthead').classList.toggle('bg-dark');
    document.getElementById('posttable').classList.toggle('text-white');
    document.getElementById('posthead').classList.toggle('text-white');

    
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
