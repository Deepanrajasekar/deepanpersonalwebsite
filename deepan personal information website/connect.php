<?php
function OpenCon()
 {
 $dbhost = "ec2-54-160-109-68.compute-1.amazonaws.com";
 $dbuser = "ydbnlatsdtsmte";
 $dbpass = "7f3f7f6e8e94eaed6c1dc6d5cd538f7af3427fe24f762ecc7362a5c5d678735b";
 $db = "d94vb9dvd4ste3";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
