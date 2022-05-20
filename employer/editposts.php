<?php 
include 'sidebar.php';
?>

<div class='container' >
<div class='row d-flex justify-content-center align-items-center h-100'>
<div class="col-lg-8 col-xl-6">
<div class="card rounded-3"  > 
<img src="../images/posts.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo" height="200px" width="400px">
<div class="card-body p-4 p-md-5">
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2"><center>Update your post</center></h3>           


<?php
$id=$_GET['id'];
$sql="select * from posts where postid='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

echo "
<form class='px-md-2' action='updatepost.php?id=$id' method='post'  enctype='multipart/form-data'>
<div class='row'>
<center>
<div class='col-md-8  text-primary'>
<span class='input-group '>
<p class='fs-6 input-group-addon  py-1 px-2' style='border:2px solid '>Job Title</p>
<input type='text' style='border:2px solid ' class='form-control py-3 px-2 input-group-addon' name='title' value='".$row['title']."'/>
</span>
</div>
</center>
</div>
<div class='row'>
<center>
<div class='col-md-8  text-primary'>
<span class='input-group '>
<p class='fs-6 input-group-addon  py-1 px-2' style='border:2px solid '>Salary</p>
<input type='text' style='border:2px solid ' class='form-control py-3 px-2 input-group-addon' name='salary' value='".$row['salary']."'/>
</span>
</div>
</center>
</div>
<div class='row'>
<center>
<div class='col-md-8 text-primary' >
<span class='input-group'>
<p class='fs-6 input-group-addon  py-1 px-2' style='border:2px solid '>Job Category</p>
<select class='select form-control  input-group-addon' name='category' style='border:2px solid '>
<option value='".$row['category']."' selected>".$row['category']."</option>
<option value='Information Technology'>Information Technology</option>
<option value='Agriculture Mangement'>Agriculture Mangement</option>
<option value='Computer Science & Engineering'>Computer Science & Engineering</option>
<option value='Others'>Others</option>
</select>
</span>
</div>
</center>
</div>
<div class='row'>
<center>
<div class='col-md-8 text-primary' >
<span class='input-group'>
<p class='fs-6 input-group-addon  py-1 px-2' style='border:2px solid '>Experience</p>
<select class='select form-control  input-group-addon' name='experience' style='border:2px solid '>
<option value='".$row['experience']."' selected>".$row['experience']."</option>
<option value='fresher'>Not required (for freshers)</option>
<option value='1 year'>1 year</option>
<option value='2 years'>2 years</option>
<option value='3 years'>3 years</option>
</select>
</span>
</div>
</center>
</div>
<div class='row'>
<div class='col-md-12 text-primary'>
<span class='input-group'>
<p class='fs-6 input-group-addon  py-1 px-2' style='border:2px solid '>Job Description</p>
<textarea  class='form-control input-group-addon  '   rows='2' cols='50'
name='description' style='border:2px solid;' >".$row['description']."
</textarea>
</span>
</div>
</div>
<div class='row'>
<div class='col-md-12 text-primary'>
<span class='input-group'>
<p class='fs-6 input-group-addon  py-1 px-2' style='border:2px solid '>Job Location</p>
<textarea  class='form-control input-group-addon  '   rows='2' cols='50'
name='location' style='border:2px solid;' >".$row['location']."
</textarea>
</span>
</div>
</div>
<center>
<button type='submit'  class='btn btn-primary btn-lg mb-1' name='btn'>Update</button>
</center>
</form>
</div>
</div>
</div>
</div>
</div> 
";
?>
<script type='text/javascript' src='js/mdb.min.js'></script>
