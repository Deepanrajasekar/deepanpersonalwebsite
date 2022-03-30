<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$host ="ec2-54-160-109-68.compute-1.amazonaws.com"
$port =" port = 5432"
$dbname ="dbname = d94vb9dvd4ste3"
$credentials =" user =ydbnlatsdtsmte  password =7f3f7f6e8e94eaed6c1dc6d5cd538f7af3427fe24f762ecc7362a5c5d678735b"
$con = pg_connect( "$host $port $dbname $credentials");

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}else{
echo "Contact not Inserted";
}

?>
