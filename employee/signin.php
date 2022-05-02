<!DOCTYPE html>
<?php
include  "../db.php";
?>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Login Page</title>
<!-- MDB icon -->
<link rel="icon" href="../images/logo.png" type="image/x-icon" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
<!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=sans-serif:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../employer/css/mdb.min.css" />
    <style>
      .gry{
        background-color: #eeeeee;
      }
      </style>
</head>
<body class="gry">
    <!-- Start your project here-->
<section class="h-100 gry" >
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-lg-12 col-xl-11">
<div class="card text-black" style="border-radius: 25px;">
<div class="card-body p-md-5">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    <br><br><br><br>
<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login to JobPortal</p>
    
<form class="mx-1 mx-md-4" action="/jobportal/employee/selectemployee.php" method="post" enctype="multipart/form-data">
    
<!-- <div class="d-flex flex-row align-items-center mb-4">
<h4 class="fas fa-user fa-lg me-3 fa-fw">👤</h4>
<div class="form-outline flex-fill mb-0">
<input type="text" id="form3Example1c" name="name" class="form-control" />
<label class="form-label" for="form3Example1c">Your Name</label>
</div>
</div> -->
    
<div class="d-flex flex-row align-items-center mb-4">
<h4 class="me-3">📧</h4>
<div class="form-outline flex-fill mb-0">
<input type="email" id="form3Example3c" name="email" class="form-control" />
<label class="form-label" for="form3Example3c">Your Email</label>
</div>
</div>
    
<div class="row">
<div class="col-md-11">
<div class="d-flex flex-row align-items-center mb-4">
<h4 class="me-3">🔐</h4>
<div class="form-outline flex-fill mb-2">
<input type="password" id="id_password" name="password" class="form-control" />
<label class="form-label" for="id_password">Password</label>

</div>
</div>
</div>
<div class="col-md-1">
<div class="form-outline  ">
<i class="fa fa-eye form-control" id="togglePassword" style=" margin-left:-60px; cursor: pointer; display:inline-block"></i>
    </div>    
</div>
    </div>

<!-- <div class="d-flex flex-row align-items-center mb-4">
<h4 class="fas fa-lock fa-lg me-3 fa-fw"></h4>
<div class="form-outline flex-fill mb-0">
<i class="fa fa-eye" id="togglePassword" style=" margin-top:20px; margin-left:320px;  cursor: pointer; display:inline-block"></i>
<input type="password" id="form3Example4c" name="password" class="form-control" /> -->

<!-- <label class="form-label" for="form3Example4c">Password</label>
</div>
</div> -->
    
<!-- <div class="d-flex flex-row align-items-center mb-4">
<h4 class="fas fa-key fa-lg me-3 fa-fw">🔑</h4>
<div class="form-outline flex-fill mb-0">
<input type="password" id="form3Example4cd" class="form-control" />
<label class="form-label" for="form3Example4cd">Repeat your password</label>
</div>
</div> -->
  
<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
<button type="submit" class="btn btn-primary btn-lg" name="btn">Login</button>
</div>
    
</form>
    
</div>
<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
    
<img src="../images/employee.jpg" class="img-fluid" alt="Sample image" style="height:330px; width:700px">
    
</div> 
</div> 
</div>
</div>
</div>
</div>
</div>
</section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../employer/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
  </body>
</html>

