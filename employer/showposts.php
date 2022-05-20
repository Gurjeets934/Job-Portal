<?php
include 'sidebar.php';
?>

<div  class='card mx-3 mt-2 mb-3 w-100 h-100 text-black bg-light' id='postcard'>
    <h3 class='text-warning  text-center mx-3 mt-4'>Posts Details</h3>
    <hr class='mx-3 bg-dark' id='posthr'>
    <?php 
 $id=$_GET['id'];
 $sql="SELECT * FROM posts where postid='$id'";
 $result=$conn->query($sql);
 $row=$result->fetch_assoc();
 echo "
   <div class='row g-0 '>
   <div class='col-md-1'>
   <hr class='bg-dark ' style='transform:rotate(90deg); width:500px; margin-left:-233px; margin-top: 233px; ' id='posthrtwo'>
   </div>
   <div class='col-md-2 text-info'>
   <ul style='list-style-type: none; padding: 0; margin: 0;'>
   <li><p class='fs-4'>Job Title</p</li>
   <li><p class='fs-4'>Category</p></li>
   <li><p class='fs-4'>Experience </p></li>
   <li><p class='fs-4'>Salary Provided</p></li>
   <li><p class='fs-4'>Job Location</p></li>
   <li><p class='fs-4'>Job Description</p></li>
   </ul>
     </div>
     <div class='col-md-1'>
     <hr class='bg-dark ' style='transform:rotate(90deg); width:500px; margin-left:-200px; margin-top: 233px; ' id='posthrthree'>
     </div>
     <div class='col-md-7 mt-3' id='cardcontent'>
     <ul style='list-style-type: none; padding: 0; margin: 0;'>
         <li><p class='fs-5'>".$row['title']."</p></li>
         <li><p class='fs-5'>".$row['category']."</p></li>
         <li><p class='fs-5'>".$row['experience']."</p></li>
         <li><p class='fs-5'>".$row['salary']."</p></li>
         <li><p class='fs-5'>".$row['location']."</p></li>
         <li><p class='fs-5'>".$row['description']."</p></li>
         </ul>
        </div>
        <div class='col-md-1'>
        <hr class='bg-dark ' style='transform:rotate(90deg); width:500px; margin-left:-166px; margin-top: 232px; ' id='posthrfour'>
        </div>";
         
?>
</div>
<hr class='mx-3 bg-dark' id='posthrfive'>
</div>
</div>
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
    document.getElementById('postcard').classList.toggle('bg-dark');
    document.getElementById('posthr').classList.toggle('bg-white');
    document.getElementById('cardcontent').classList.toggle('text-light');
    document.getElementById('posthrtwo').classList.toggle('bg-white');
    document.getElementById('posthrthree').classList.toggle('bg-white');
    document.getElementById('posthrfour').classList.toggle('bg-white');
    document.getElementById('posthrfive').classList.toggle('bg-white');
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
