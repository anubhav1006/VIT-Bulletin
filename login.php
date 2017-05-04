<?php
	
	error_reporting(E_ALL);// & ~E_WARNING & ~E_NOTICE);
	ini_set('display_errors', 'off');

if (isset($_POST['userid']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$userid = $_POST['userid'];
	$pass = md5($_POST['pass']);


	
$sql = "select * from user where username='$userid' and password='$pass';";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0)
 {

	 
		while ($row = mysqli_fetch_assoc($result)) 
		{


			session_start();
			$_SESSION['userid'] = $row['username'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['image'] = $row['image'];
				
			
		header('Location: /vitbull/home.php');
		}
		
		
		 
	 
 }
 else
 {
    	header('Location: /vitbull/main.php?type1=1');
        
 }
}

else
{
header('Location: /vitbull');
}




?>
