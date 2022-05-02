<?php
include "../db.php";
?>
<html lang="en">  
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Sign Up Page</title>
<!-- MDB icon -->
<link rel="icon" href="../images/logo.png" type="image/x-icon" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
<!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../employer/css/mdb.min.css" />
    <style>
      .bg-indigo {
  background-color: #4835d4;
}
.gradient-custom-2 {
  /* fallback for old browsers */
  background: #a1c4fd;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

      </style>
</head>
<body class='gradient-custom-2'>
<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4" style="height:auto;">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="../images/employee.jpg"
                alt="Sample photo"
                class="img-fluid"
                
                style="height:auto; width:600px; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <center><h3 class="mb-5 text-uppercase">Jobseeker Sign-Up Form</h3></center>
                <form class="mx-1 mx-md-4" action="/jobportal/employee/addemployee.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="firstname" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="lastname" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="mothername" id="form3Example1m1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="fathername" id="form3Example1n1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="femaleGender"
                      value="Female"
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
 
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="maleGender"
                      value="Male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="otherGender"
                      value="Other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>


                <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <input type="text" name="dob" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>
                </div>
                <!-- <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div> -->

                <!-- <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div> -->
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <input type="password" name="password"  id="id_password" class="form-control form-control-lg" />
                  <i class="fa fa-eye" id="togglePassword" style=" margin-top:-30px; margin-left:210px;  cursor: pointer; display:inline-block"></i>
                  <label class="form-label" for="id_password">Password</label>
                </div>
                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline mb-4">
                  <input type="password" name="confirmpassword"  id="cnf_password" class="form-control form-control-lg" />
                  <i class="fa fa-eye" id="cnftogglePassword" style=" margin-top:-30px; margin-left:210px;  cursor: pointer;"></i>
                  <label class="form-label" for="cnf_password">Confirm Password</label>
                </div>
                </div>
                </div>
                <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                <h6 class="mb-0">Profile Pic</h6>
                </div>
                <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" name="propic" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Upload Your Picture that will show on your profile/Leave Blank if don't want to upload.</div>
              </div>
            </div>

            <hr class="mx-n3">
                <div class="d-flex justify-content-center pt-3">
                  <!-- <button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                  <button type="submit" name="btn" class="btn btn-warning btn-lg ms-2">Sign Up</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="../employer/js/mdb.min.js">
</script>
    <!-- Custom scripts -->
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
const cnftogglePassword = document.querySelector('#cnftogglePassword');
  const cnfpassword = document.querySelector('#cnf_password');
 
  cnftogglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = cnfpassword.getAttribute('type') === 'password' ? 'text' : 'password';
    cnfpassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>    
</body>
</html>