<?php
include "../db.php";

if(isset($_POST['btn']))
{
$sql="select email,password from jobseeker";

$flag=0;
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
         
        if($row['email']==$_POST['email']&&$row['password']==$_POST['password'])
        {
                session_start();
                isset($_SESSION['jobseekeremail']);
                $_SESSION['jobseekeremail']=$_POST['email'];
            echo "<script>alert('Logged In Successfully')</script>";
            echo "<script>window.location='home.php';</script>";
   
            
        }
        else
        {  
            $flag=1;
        }
    }
}
if($flag==1)
{
    
    echo "<script>alert('Invalid Username and Password');</script>";
    echo "<script>window.location='/jobportal/employee/signin.php';</script>";
    
}
}
?>