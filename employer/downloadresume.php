<?php
include "../db.php";


  $file=$_GET['file'];
// The location of the PDF file
// on the server
$filename = "../employee/".$file;
  
// Header content type
header("Content-type: application/pdf");
  
header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
readfile($filename);

// $pic=$_GET['pic'];
// header('Content-Type: application/download');
// header('Content-Disposition: attachment; filename="$pic"');
// header("Content-Length: " . filesize("$pic"));
// $fp = fopen("$pic", "r");
// fpassthru($fp);
// fclose($fp);
?>