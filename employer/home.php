<!DOCTYPE html>
<?php 
include "../db.php";
session_start();
//to start the session don't include if included already in database  file.
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <!-- <link href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=sans-serif:wght@300;400;500;700;900&display=swap"/>
    <style>
      .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
      body
      {
        overflow-x:hidden;
        overflow-y:auto;
      }
      .gradient-custom-1 {
  /* fallback for old browsers */
  background: #a1c4fd;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}
      .gradient-custom-2 {
  /* fallback for old browsers */
  background: #a1c4fd;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 0, 253, 1), rgba(194, 0, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 0, 253, 1), rgba(194, 0, 251, 1))
}
      </style>
</head>
<body class="bg-light" id="body" onload="mode()">   

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed; z-index:4; width:100%;" id="change">
<div class="container">
  <!-- Navbar brand -->
  <?php 
  echo "<a class='navbar-brand me-2' href='/jobportal/employer/home.php'>
   <img
           src='../images/logo.png'
           height='60'
         alt='MDB Logo'
           loading='lazy'
     style='margin-top: -1px;'
      />
      </a>";
   ?>    
   
  
<button 
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
      ☰
      <!-- Click Me
        <i class="fas fa-bars"></i>  -->
      </button>
<!-- Collapsible wrapper -->
<div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <?php 
            echo "<a class='nav-link' href='dashboard.php'>Dashboard</a>
            ";
            ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewposts.php">View Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posts.php">Post a Job</a>
</li>
          <li class="nav-item">
            <a class="nav-link" href="company.php">My Company</a>
</li>
<li class="nav-item">
            <a class="nav-link" href="company.php">Contact Us</a>
</li>
        </ul>
        <!-- Left links -->
  
        
  
 <?php
  // script for the user authentication after login that user has login or not!
 if(isset($_SESSION['email']))
 {
  //  $id=$_GET['id'];
  $email=$_SESSION['email'];
   $sql="select name from employer where email='$email'";
 
     $result=$conn->query($sql);
   
     $row=$result->fetch_assoc();
 
    
     echo"<ul class='navbar-nav me-auto mb-2 mb-lg-0'>
     <li class='nav-item'>
     <big style='color:rgb(100,100,200);'>HELLO  ".$row['name']."</big>
     </li>
     </ul>";
     
    //  echo $_SESSION['email'];
    //  echo $_SESSION['company']; 

     echo "<div class='d-flex align-items-center'>
     <button type='button' class='btn btn-primary me-3' id='signoutbtn'>
           <a  href='logout.php' style='color:white; decoration:none;'>Sign Out</a>
             </button>
 
       <button id='darkmodeelse' onclick='toggler()' class='btn btn-primary' style='padding:10px 10px 10px 10px;'>🌙</button>
             </div>
           </div>
       <!-- Collapsible wrapper -->
     </div>
     <!-- Container wrapper -->
   </nav>
   ";

 }
else {
echo "<script>window.location='login.php'</script>";
}
 
 
 ?>
 
 <div class="row bg-light bg-gradient mb-3 " style='padding-top:120px' id='div1'>
   <div class="col-md-6 align-items-center py-5 mx-2 ">
<p class='fw-bold text-center'>Post Your Job</p>
<p class='fw-normal text-center'>Create employement oppurtunites.</p>
<p class='fw-normal text-center'>Hire! Talent Across the World</p> 
</div>
<div class="col-md-3">
<img src='../images/download.png' height='100%' width='100%' />
  </div>
  <div class='col-md-3'>
</div>
</div>
<hr class='text-dark mb-3' id='homehr'>
<div class="row bg-light bg-gradient py-5 mb-3 " id='div2'>
<div class='col-md-2'>
</div>
<div class="col-md-3">
<img src='../images/hire.jpg' height='100%' width='100%' />
  </div>
<div class="col-md-6 align-items-center py-5 mx-2 ">
<p class='fw-bold text-center'>Find the Person you want to hire</p>
<p class='fw-normal text-center'>Filter the most matched candidates.</p>
<p class='fw-normal text-center'>Help you find the right talent.</p> 
</div>

</div>
<?php include 'footer.php';
 ?>


 <script type='text/javascript' src='js/mdb.min.js'>
  </script>

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
    document.getElementById('signoutbtn').classList.toggle('btn-secondary');
    document.getElementById('div1').classList.toggle('bg-dark');
    document.getElementById('div1').classList.toggle('text-white');
    document.getElementById('div2').classList.toggle('bg-dark');
    document.getElementById('div2').classList.toggle('text-white');
    document.getElementById('homehr').classList.toggle('text-white');
    document.getElementById('footer').classList.toggle('bg-dark');
    document.getElementById('footer').classList.toggle('text-white');
    document.getElementById('footerhr').classList.toggle('text-white');
    document.getElementById('footersection').classList.toggle('bg-dark');
    document.getElementById('footersection').classList.toggle('text-white');
   

   
    
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
 </body>
 </html>
