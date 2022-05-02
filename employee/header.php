

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
    <!-- <link href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=sans-serif:wght@300;400;500;700;900&display=swap"/>
    <style>
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

<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="position:fixed; z-index:4; width:100%;  " id="change">
<div class="container">
  <!-- Navbar brand -->
  <a class='navbar-brand me-2' href='/jobportal/employee/home.php'>
  <img
           src='../images/logo.png'
           height='60'
         alt='MDB Logo'
           loading='lazy'
     style='margin-top: -1px;'
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
        <?php 
    
        echo "
        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
          <li class='nav-item'>
            <a class='nav-link' href='dashboard.php'>Dashboard</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>Jobs</a>
          </li>
        </ul>";
        ?>
        <!-- Left links -->
  
        
  
 <?php
 if(isset($_SESSION['jobseekeremail']))
 {

$email=$_SESSION['jobseekeremail'];
$sql="select firstname from jobseeker where email='$email'";
 
     $result=$conn->query($sql);
     
     $row=$result->fetch_assoc();
     
    
     
     echo"<ul class='navbar-nav me-auto mb-2 mb-lg-0'>
     <li class='nav-item'>
     <big style='color:rgb(100,100,200);'>HELLO  ".$row['firstname']."</big>
     </li>
     </ul>";
 
     echo "<div class='d-flex align-items-center'>
     <button type='button' class='btn btn-primary me-3' id='signbtn'>
           <a  href='/jobportal/employee/signout.php' style='color:white; decoration:none;'>Sign Out</a>
             </button>
     </button>
       <button id='darkmodeelse' onclick='toggler()' class='btn btn-primary' style='padding:10px 10px 10px 10px;'>🌙</button>
             </div>
           </div>
       <!-- Collapsible wrapper -->
     </div>
     <!-- Container wrapper -->
   </nav>";
 //Navbar end
 }
 else
 {
   echo "<script>window.location='signin.php'</script>";
 } 
 ?>
 <!--Navbar end -->