<?php
include "../db.php";
if(isset($_POST['btn']))
{
$sql="select email,password,company from employer";

$flag=0;
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
         
        if($row['email']==$_POST['email']&&$row['password']==$_POST['password'])
        {
                
                session_start();
                isset($_SESSION['email']);
                isset($_SESSION['company']);
                // $id=$row['id'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['company']=$row['company'];
            echo "<script>window.location='home.php';</script>";
            
        }
        else
        {   

            $flag=1;
            // if($row['email']==$_POST['email'])
            // {
                
            //     $c=$row['email'];
            // echo "<div class='alert alert-info'><a href='fogetp.php?id=$c'>Forget Password?</a></div>";
            // }
        }
    }
}
if($flag==1)
{
    
    echo "<script>alert('Invalid Username and Password');</script>";
    echo "<script>window.location='/jobportal/employer/login.php';</script>";
    
}
}
?>