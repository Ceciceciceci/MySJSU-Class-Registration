<!DOCTYPE html>
<head>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
    
<style>

    table{
            width:100%;
    }
</style>
</head>


<?php
//phpinfo();
//exit;
//require 'connect.php';

$database = "MYSJSU";
$user = "user";
$pass = "pass";

try{
	$conn = db2_connect($database, $user, $pass);
}
catch( Exception $e ){
	echo "Exception: ". $e->getMessage();
}

if( $conn ){
	$sql ="select CID, SUBJECT, PRCID from course";
	$stmt = db2_prepare($conn, $sql);
	
    
	if( $stmt)
	{
		$result = db2_execute($stmt);
	}
	else
	{
		echo "No results";
	}
    
    echo "<table>";
	while($row = db2_fetch_array($stmt))
	{
	   echo "<thead><tr><th>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</th></tr></thead>";
	}
    echo "</table>";
	db2_close($conn);
}
else{
	echo db2_conn_error()."<br>";
	echo db2_conn_errormsg()."<br>";
	echo "Connection failed.<br>";
}
?>