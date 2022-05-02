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
            <a class='nav-link' href='jobs.php'>Jobs</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='messages.php'>Messages</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>Contact Us</a>
    </li>
    <li class='nav-item'>
            <a class='nav-link' href='#'>Help Center</a>
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
 <div id="carouselExampleInterval" style=' margin-top: 0px; margin-bottom:30px; margin-left:430px; margin-right:0px; padding-top:120px' class="carousel slide w-50" data-mdb-ride="carousel">
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <div class="carousel-item active" data-mdb-interval="2500">
      <img src="../images/message.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2500">
      <img src="../images/message2.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2500">
      <img src="../images/message3.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2500">
      <img src="../images/message1.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
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
 


 <div class='row gradient-custom-1 rounded-5 shadow-4-strong' style=' margin-top:100px; margin-bottom:30px; margin-left:320px; margin-right:220px; padding-top: 50px;'  id='postcard'>
 <div class="col-md-4">
 <form method='post' action=''>
 <div class="input-group" style="margin-left:30px; ">
  <div class="col-md-10">
 <select class="select" name="category" style="margin-top:10px; margin-left:-15px; padding:10px 5px 5px 10px;">
<option value="1" disabled selected>Search Job By Category</option>
<option value="Information Technology">Information Technology</option>
<option value="Agriculture Mangement">Agriculture Mangement</option>
<option value="Software Engineering">Software Engineering</option>
<option value="Others">Others</option>
</select>
</div>
<div class="col-md-2" style="margin-top:5px; margin-left:-65px; padding:5px 5px 5px 5px;">
<button type="submit" name="serch" class="btn btn-primary bg-gradient" id='searchbutton'>
    <img src="../images/search.png" height='16px' width='16px' alt='searchicon'>
  </button>
</div>
  </div>
</form>
</div>

<div class="col-md-4">
 <form method='post' action=''>
 <div class="input-group" style="margin-left:0px; padding:10px 10px 10px 10px">
  <div class="form-outline">
    <input id="search-focus" name="title" type="text" id="form1" class="form-control"/>
    <label class="form-label" for="form1" id='searchlabel'>Search Job By Title</label>
  </div>
  <button type="submit" name="srch" class="btn btn-primary bg-gradient" id='searchbutton2'>
    <img src="../images/search.png" height='16px' width='16px' alt='searchicon'>
  </button>
</div>
</form>
</div>

<div class="col-md-4">
<form method='post' action=''>
 <div class="input-group" style="margin-left:0px; padding:10px 10px 10px 10px">
  <div class="form-outline">
    <input id="search-focus2" name="location" type="text" id="form2" class="form-control"/>
    <label class="form-label" for="form1" id='searchlabel2'>Search Job By Location</label>
  </div>
  <button type="submit" name="search" class="btn btn-primary bg-gradient" id='searchbutton3'>
    <img src="../images/search.png" height='16px' width='16px' alt='searchicon'>
  </button>
</div>
</form>
</div>

<?php
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
   echo "<p class='card-text'>$x</p>";
  }
  else
  {
    $y=substr($x,0,$length) . "...";
    echo "<p class='card-text'>$y</p>";
  }
}



if(isset($_POST['serch']))
{
  

$category=$_POST['category'];

  // var_dump($_POST['search']);
$sql="SELECT * FROM POSTS WHERE CATEGORY ='$category'";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
      
      $id=$row['postid'];
 echo "<div  class='card mb-3 col-md-3 text-black bg-light' style='max-width:540px; width:300px; margin-left:20px;  margin-top:10px; margin-bottom:10px;'>
   <div class='row g-0'>
   <div class='col-md-3'>
     <img src='../employer/".$row['companylogo']."' height='60px' width='60px' >
     </div>
     <div class='col-md-9'>
       <div class='card-body'>
         <h5 class='card-title'>".$row['title']."</h5>
         <hr>
         <h6 class='card-title'>".$row['company']."</h6>
         <p class='card-text'>
         <small class='card-text '>💼 ".$row['experience']."</small><br>
         <small class='card-text'>💸 ".$row['salary']."</small><br>
         <small class='card-text'>📍 ".$row['location']."</small>
         </p>";  
         custom_echo($row['description'],40);
         echo "
         <a class='btn btn-primary bg-gradient' href='viewjob.php?id=$id'>
         View Job
       </a>
        </div>
        </div>
        </div>
        </div>";
  
}
}

else
{
  echo "<p class='fs-6 text-center bg-light text-black bg-gradient w-50 mt-4' style='padding:10px 10px 10px 10px; margin-left:250px;'  id='resulttext1'>Sorry,No Results Found..................</p>";
}
     echo "</div>";
}


if(isset($_POST['srch']))
{

$keyword=$_POST['title'];

  // var_dump($_POST['search']);
$sql="SELECT * FROM POSTS WHERE TITLE LIKE '%$keyword%' ORDER BY TITLE desc";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
      
      $id=$row['postid'];
 echo "<div  class='card mb-3 col-md-3 text-black bg-light' style='max-width:540px; width:300px; margin-left:20px;  margin-top:10px; margin-bottom:10px;'>
   <div class='row g-0'>
   <div class='col-md-3'>
     <img src='../employer/".$row['companylogo']."' height='60px' width='60px' class='shadow-strong-3 rounded-circle'>
     </div>
     <div class='col-md-9'>
       <div class='card-body'>
         <h5 class='card-title'>".$row['title']."</h5>
         <hr>
         <h6 class='card-title'>".$row['company']."</h6>
         <p class='card-text'>
         <small class='card-text '>💼 ".$row['experience']."</small><br>
         <small class='card-text'>💸 ".$row['salary']."</small><br>
         <small class='card-text'>📍 ".$row['location']."</small>
         </p>";
        
         custom_echo($row['description'],42);

         echo "
         <a class='btn btn-primary bg-gradient' href='viewjob.php?id=$id'>
         View Job
       </a>

        </div>
        </div>
        </div>
        </div>";
   


}
}

else
{
  echo "<p class='fs-6 text-center bg-light text-black bg-gradient w-50 mt-4' style='padding:10px 10px 10px 10px; margin-left:250px;'  id='resulttext2'>Sorry,No Results Found..................</p>";
}
     echo "</div>";
}

if(isset($_POST['search']))
{

$location=$_POST['location'];

  // var_dump($_POST['search']);
$sql="SELECT * FROM POSTS WHERE LOCATION LIKE '%$location%' ORDER BY LOCATION desc";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
      
      $id=$row['postid'];
 echo "<div  class='card mb-3 col-md-3 text-black bg-light' style='max-width:540px; width:300px; margin-left:20px;  margin-top:10px; margin-bottom:10px;'>
   <div class='row g-0'>
   <div class='col-md-3'>
     <img src='../employer/".$row['companylogo']."' height='60px' width='60px' class='shadow-strong-3 rounded-circle' >
     </div>
     <div class='col-md-9'>
       <div class='card-body'>
         <h5 class='card-title'>".$row['title']."</h5>
         <hr>
         <h6 class='card-title'>".$row['company']."</h6>
         <p class='card-text'>
         <small class='card-text '>💼 ".$row['experience']."</small><br>
         <small class='card-text'>💸 ".$row['salary']."</small><br>
         <small class='card-text'>📍 ".$row['location']."</small>
         </p>";
        
         custom_echo($row['description'],42);

         echo "
         <a class='btn btn-primary bg-gradient' href='viewjob.php?id=$id'>
         View Job
       </a>

        </div>
        </div>
        </div>
        </div>";
   


}
}

else
{
  echo "<p class='fs-6 text-center bg-light text-black bg-gradient w-50 mt-4' style='padding:10px 10px 10px 10px; margin-left:250px;'  id='resulttext3'>Sorry,No Results Found..................</p>";
}
     echo "</div>";
}

if((!isset($_POST['srch']))&&((!isset($_POST['serch'])))&&((!isset($_POST['search']))))
{
  $per_page_record = 3;  // Number of entries to show in a page.   
         // Look for a GET variable page if not found default is 1.        
         if (isset($_GET["page"])) {    
             $page  = $_GET["page"];    
         }    
         else {    
           $page=1;    
         }    
     
         $start_from = ($page-1) * $per_page_record;     
     
         $sql = "SELECT * FROM POSTS LIMIT $start_from, $per_page_record";


 $result=$conn->query($sql);

 if($result->num_rows>0)
 {
     while($row=$result->fetch_assoc())
     {
        
      $id=$row['postid'];
 echo "<div  class='card mb-3 col-md-3 text-black bg-light' style='max-width:540px; width:300px; margin-left:20px;  margin-top:10px; margin-bottom:10px;'>
   <div class='row g-0'>
   <div class='col-md-3'>
     <img src='../employer/".$row['companylogo']."' height='60px' width='60px' class='shadow-strong-3 rounded-circle' >
     </div>
     <div class='col-md-8'>
       <div class='card-body'>
         <h5 class='card-title'>".$row['title']."</h5>
         <hr>
         <h6 class='card-title'>".$row['company']."</h6>
         <p class='card-text'>
         <small class='card-text '>💼 ".$row['experience']."</small><br>
         <small class='card-text'>💸 ".$row['salary']."</small><br>
         <small class='card-text'>📍 ".$row['location']."</small>
         </p>";
        
         custom_echo($row['description'],40);

         echo "
         <a class='btn btn-primary bg-gradient' href='viewjob.php?id=$id'>
         View Job
       </a>

       
     
     </div>
     </div>
   </div>
 </div> ";
     }
     }
?> 
<!-- Modal -->
 
    <center>
<div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM posts";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='home.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='home.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='home.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='home.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
      </center>
      <?php 
    }?>
    </div>

 <script type='text/javascript' src='js/mdb.min.js'></script>
 <script type="text/javascript">
const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});




  </script>
    <script type='text/javascript'>
     function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'home.php?page='+page;   
    }   
    </script>

    <?php 
    include 'footer.php';
    ?>
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
    document.getElementById('search-focus').classList.toggle('text-white');
    document.getElementById('searchlabel').classList.toggle('text-white');
    document.getElementById('search-focus2').classList.toggle('text-white');
    document.getElementById('searchlabel2').classList.toggle('text-white');
    document.getElementById('searchbutton').classList.toggle('btn-secondary');
    document.getElementById('searchbutton2').classList.toggle('btn-secondary');
    document.getElementById('searchbutton3').classList.toggle('btn-secondary');
    document.getElementById('postcard').classList.toggle('gradient-custom-2');
    document.getElementById('signbtn').classList.toggle('btn-secondary');
    document.getElementById('footer').classList.toggle('bg-dark');
    document.getElementById('footer').classList.toggle('text-white');
    document.getElementById('footerhr').classList.toggle('text-white');
    document.getElementById('footersection').classList.toggle('bg-dark');
    document.getElementById('footersection').classList.toggle('text-white');
    document.getElementById('loginbtn').classList.toggle('btn-secondary');
   
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
