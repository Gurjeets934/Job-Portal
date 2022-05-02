<!DOCTYPE html>
<?php 
include "db.php";
session_start();
// echo session_id();
//to start the session don't include if included already in database  file.
// echo "<script>alert('Welcome to Job Portal')</script>";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="employer/css/mdb.min.css" />
    <!-- <link href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=sans-serif:wght@300;400;500;700;900&display=swap"/>
    <style>
      body
      {
        overflow-x:hidden;
        overflow-y:auto;
      }
      </style>
</head>
<body class="bg-light" id="body" onload="mode()">   

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed; z-index:4; width:100%" id="change">
<div class="container">
  <!-- Navbar brand -->
   <a class="navbar-brand me-2" href="<?= $_SERVER['PHP_SELF'] ?>" >
       <img
           src="images/logo.png"
           height="60"
         alt="MDB Logo"
           loading="lazy"
     style="margin-top: -1px;"
      />
      </a>
  
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
            <a class="nav-link" href="<?= $_SERVER['PHP_SELF'] ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">How to Apply?</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="#">Help Center</a>
    </li>
        </ul>
        <!-- Left links -->
  
        
  
 <?php
 // script for the user authentication after login that user has login or not!
// if(isset($_SESSION['email']))
// {
//   echo "<script>alert('Welcome Employer, Ready To Hire!');</script>";
//   echo "<script>window.location='/jobportal/employer/home.php';</script>";
// }
// if(isset($_SESSION['jobseekeremail']))
// {
//   echo "<script>alert('Welcome Jobseeker, Find Your Dream Job With Us!');</script>";
//   echo "<script>window.location='/jobportal/employee/home.php';</script>";
// }
// else
// {
  echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>
  <li class='nav-item'>
  <big style='color:rgb(100,100,200); margin-left:60px'>WELCOME TO JOB PORTAL</big>
  </li>
  </ul>";

echo "<div class='d-flex align-items-center'>
         <div class='btn-group'  style='margin-left:40px'>
  <button type='button' class='btn btn-primary bg-gradient' id='employer'>Employer</button>
  <button
    type='button'
    class='btn btn-primary bg-gradient dropdown-toggle dropdown-toggle-split'
    data-mdb-toggle='dropdown'
    aria-expanded='false'
      id='emp'>
    <span class='visually-hidden'>Toggle Dropdown</span>
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item text-light bg-gradient bg-info ' href='employer/signup.php' id='reg'>Register</a></li>
        <li><a class='dropdown-item text-light bg-gradient bg-info ' href='employer/login.php' id='sig'>Sign-In</a></li>
  </ul>
</div>

<div class='d-flex align-items-center' style='margin-left:10px;'>
<div class='btn-group'>
<button type='button' class='btn btn-primary bg-gradient' id='employee'>Jobseeker</button>
<button
type='button'
class='btn btn-primary bg-gradient dropdown-toggle dropdown-toggle-split'
data-mdb-toggle='dropdown'
aria-expanded='false'
id='empe'>
<span class='visually-hidden'>Toggle Dropdown</span>
</button>
<ul class='dropdown-menu'>
<li><a class='dropdown-item text-light bg-gradient bg-info ' href='employee/register.php' id='fre'>Create a free account</a></li>
<li><a class='dropdown-item text-light bg-gradient bg-info ' href='employee/signin.php' id='log'>Login</a></li>
</ul>
</div>

          <button id='darkmodeelse' onclick='toggler()' class='btn btn-primary' style='padding:10px 10px 10px 10px; margin-left:10px;'>🌙</button>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
";
//Navbar end


?>

<div style= "padding-top: 140px;">
</div>
<div class="card bg-primary text-white"  style="padding:20px 20px 20px 20px; width:35%; margin-left:100px; margin-right:80px">

  <h4 class='fs-4 fw-bold'>FIND YOUR DREAM JOB</h4>
  <h5 class='fs-5 fw-normal'>We will help you to make your dream come true</h5>
  <span class='input-group py-5'>
  <input type='text' class='input-group-addon  py-2 form-control' name='jobsearch' placeholder='Search Your Dream Job'> 
  <button type='submit'  class='input-group-addon btn btn-success' name='searchjobnow'>Search Job</button>
</span>
<h6 class='fs-6 fw-normal'>Find Better Jobs All Around The World</h6>
</div>

<div id="carouselExampleInterval" style=" width:40%; margin-left:700px; margin-top:-290px" class="carousel slide " data-mdb-ride="carousel">
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <div class="carousel-item active" data-mdb-interval="2500">
      <img src="images/message.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2500">
      <img src="images/message2.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2500">
      <img src="images/message3.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2500">
      <img src="images/message1.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php include 'footer.php';
 ?>
<script type='text/javascript' src='employer/js/mdb.min.js'>
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
   document.getElementById('employer').classList.toggle('btn-secondary');
   document.getElementById('emp').classList.toggle('btn-secondary');
   document.getElementById('reg').classList.toggle('bg-white');
   document.getElementById('sig').classList.toggle('bg-white');
   document.getElementById('reg').classList.toggle('text-dark');
   document.getElementById('sig').classList.toggle('text-dark');
   document.getElementById('employee').classList.toggle('btn-secondary');
   document.getElementById('empe').classList.toggle('btn-secondary');
   document.getElementById('fre').classList.toggle('bg-white');
   document.getElementById('log').classList.toggle('bg-white');
   document.getElementById('fre').classList.toggle('text-dark');
   document.getElementById('log').classList.toggle('text-dark');
   document.getElementById('footer').classList.toggle('bg-dark');
    document.getElementById('footer').classList.toggle('text-white');
    document.getElementById('footerhr').classList.toggle('text-white');
    document.getElementById('footersection').classList.toggle('bg-dark');
    document.getElementById('footersection').classList.toggle('text-white');
   
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