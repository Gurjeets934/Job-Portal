

<?php
include "sidebar.php";
?>


<!-- <section class="h-100 h-custom gradient-custom-2" style=" height: -webkit-fill-available; width:100%; margin-bottom: 40px; margin-top:-30px; "> -->
<div class="container" >
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-lg-8 col-xl-6">
<div class="card rounded-3"  > 
<img src="../images/posts.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo" height="200px" width="400px">
<div class="card-body p-4 p-md-5">
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2"><center>Post Your Job</center></h3>           
<form class="px-md-2" action="/jobportal/employer/addposts.php" method="post"  enctype="multipart/form-data">
<div class="row">
<div class="form-outline col-md-6 mb-4" style="margin-top:-12px;">
<input type="text" id="form3Example1q" class="form-control" name="title"/>
<label class="form-label" for="form3Example1q">Enter Job Title</label>
</div>
<div class="form-outline col-md-5 mb-4" style="margin-top:-12px; margin-left:30px;">
<input type="text" id="form3Example1q" class="form-control" name="salary"/>
<label class="form-label" for="form3Example1q">Salary</label>
</div>
</div>
<div class="row">
<div class="form-outline col-md-6 mb-4" style="margin-left:-5px;";>
<select class="select" name="category">
<option value="1" disabled selected>Category</option>
<option value="Information Technology">Information Technology</option>
<option value="Agriculture Mangement">Agriculture Mangement</option>
<option value="Computer Science & Engineering">Computer Science & Engineering</option>
<option value="Others">Others</option>
</select>
</div>
<div class="form-outline col-md-2 mb-4" style="margin-left: 30px;";>
<select class="select" name="experience">
<option value="1" disabled selected>Experienced Required</option>
<option value="fresher">Not required (for freshers)</option>
<option value="1 year">1 year</option>
<option value="2 years">2 years</option>
<option value="3 years">3 years</option>
</select>
</div>
</div>
<div class="form-outline mb-4">
<textarea id="form3Example1q" class="form-control"   rows="2" cols="50"
name="description"
style="outline:2px solid grey; margin-left:-5px;" >
</textarea>
<label for="form3Example1q" class="form-label">
Enter Job Description 
</label>
</div>
<div class="form-outline mb-4">
<textarea id="form3Example1q" class="form-control"   rows="1" cols="50"
name="location"
style="outline:2px solid grey; margin-left:-5px;" >
</textarea>
<label for="form3Example1q" class="form-label">
Enter Job Location 
</label>
</div>
<center>
<button type="submit"  class="btn btn-primary btn-lg mb-1" name="btn">Submit</button>
</center>
</form>
</div>
</div>
</div>
</div>
</div> 

<!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script> -->
<script type="text/javascript" src="js/mdb.min.js"></script>

  <!-- Custom scripts -->


