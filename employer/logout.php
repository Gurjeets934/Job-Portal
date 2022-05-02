<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout Page</title>
</head>
<body>
<?php

unset($_SESSION['email']);
unset($_SESSION['company']);


echo "<script>       
window.location.href = '../index.php';        
      </script>";
?>
   
</body>
</html>