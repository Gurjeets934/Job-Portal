<?php
include "sidebar.php";
?>
<?php 
$EMAIL=$_SESSION['email'];
$SQL="SELECT * FROM EMPLOYER WHERE EMAIL='$EMAIL'";
$RESULT=$conn->query($SQL);
$ROW=$RESULT->FETCH_ASSOC();
echo"
<body>
<div class='container' style='height:100%; width:50%; padding:30px 30px 30px 30px'> 
    <h1 class='text-primary bg-light bg-gradient'><center><img src='".$ROW['logo']."' width='80px' height='80px'/>
    Company Details</center></h1>
    
<div class='container' style='height:300px; width:50%;'>
<h4 class='text-white'>Company Name:".$row['company']."</h4>
</div>   
</div>
</body>";
?>
