<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$host ="ec2-3-229-252-6.compute-1.amazonaws.com";
$port ="port=5432";
$dbname ="dbname=uwdosgsklyptut";
$credentials ="uwdosgsklyptut  password=8ff71ced285a8df0fd4202fc69cff7d3f3a1cceef9bba14b5f1f1220492b8b96";
$con = pg_connect( "$host $port $dbname $credentials");

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}else{
echo "Contact not Inserted";
}

?>
