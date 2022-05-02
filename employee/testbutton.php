<?php
include "../db.php";
?>

<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- <link href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
</head>
<!-- Button trigger modal -->
<?php 
session_start();
$sql="SELECT * from jobseeker where email='gurmeet878@gmail.com'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$pic=$row['pic'];
for($i=0;$i<3;$i++){
  echo "
  
<button type='button' class='btn btn-primary' data-mdb-toggle='modal' data-mdb-target='#exampleModal$i'>
  Launch demo modal
</button>

<!-- Modal -->
<div class='modal fade'  id='exampleModal$i' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content' style='width:600px;'>
      <div class='modal-header '>
        <h5 class='modal-title' id='exampleModalLabel'>Apply For Job</h5>
        <button type='button' class='btn-close' data-mdb-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
      <section class='vh-100' style='background-color: #2779e2;' >
  <div class='container h-100'  >
    <div class='row d-flex justify-content-center align-items-center h-100'>
      <div class='col-xl-12'>

        <h1 class='text-white mb-4'>Application Form:</h1>
       
        <div class='card' style='border-radius: 15px; margin-bottom:-20px;'>
          <div class='card-body'>
          <form action='testbutton2.php?pic=$pic' method='post' enctype='mutlipart/form-data'>
            <div class='row align-items-center pt-4 pb-3'>
              <div class='col-md-4 ps-5'>

                <h6 class='mb-0'>Full name</h6>

              </div>
              <div class='col-md-8 pe-5'>

                <input type='text' class='form-control form-control-lg' />

              </div>
            </div>

            <hr class='mx-n3'>

            <div class='row align-items-center py-3'>
              <div class='col-md-4 ps-5'>

                <h6 class='mb-0'>Email address</h6>

              </div>
              <div class='col-md-8 pe-5'>

                <input type='email' class='form-control form-control-lg' placeholder='example@example.com' />

              </div>
            </div>

            <hr class='mx-n3'>

            <div class='row align-items-center py-3'>
              <div class='col-md-4 ps-5'>

                <h6 class='mb-0'>Full name</h6>

              </div>
              <div class='col-md-8 pe-5'>

                <textarea class='form-control' rows='3' placeholder='Message sent to the employer'></textarea>

              </div>
            </div>

            <hr class='mx-n3'>

            <div class='row align-items-center py-3'>
              <div class='col-md-4 ps-5'>

                <h6 class='mb-0'>Upload CV</h6>

              </div>
              <div class='col-md-8 pe-5'>

                <input class='form-control form-control-lg' id='formFileLg' type='file' />
                <div class='small text-muted mt-2'>Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>

              </div>
            </div>

            <hr class='mx-n3'>

            <div class='px-5 py-4'>
              <button type='submit' class='btn btn-primary btn-lg'>Send application</button>
            </div> 
           </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-mdb-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>
";}
?>
<script type='text/javascript' src='js/mdb.min.js'>
  </script>