<!DOCTYPE html>
<?php 
include "db.php";
session_start();
// echo session_id();
//to start the session don't include if included already in database  file.
echo "<script>alert('Welcome to Admin Dashboard')</script>";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="employer/css/mdb.min.css" />
    <!-- <link href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/ll.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=sans-serif:wght@300;400;500;700;900&display=swap"/>
    
<body>
    <div class='card align-items-center py-5' style='height:'>
    <h1>Welcome to Admin Dashboard</h1>
