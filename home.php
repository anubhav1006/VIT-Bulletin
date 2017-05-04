<?php require("header.php");
		include('check.php');

?>
<?php

if ($_REQUEST['type'] == 1)
{
		
	echo "<script>alert('Posted Successfully');</script>";
}
else if ($_REQUEST['type'] == 2)
{
		echo "<script>alert('Try Again');</script>";	
	
}

else if ($_REQUEST['type'] == 3)
{
		echo "<script>alert('Deleted Successfully');</script>";	
	
}

else if ($_REQUEST['type'] == 4)
{
		echo "<script>alert('Edited Successfully');</script>";	
	
}



?>
<div id="divbody">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";
$author = $_SESSION['userid'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql = "select * from post order by id desc;";


 if ($result = mysqli_query($conn, $sql))
 { 
		while ($row1 = mysqli_fetch_array($result)) 
		{
			if ($_REQUEST['cat'] == 'your' )
			{
				if ($author==$row1['author'])
				{
			$a = $row1['header'];
			$b = $row1['content'];
			$c = $row1['id'];
			$d = $row1['author'];
			echo "<div class='postsss'>
<div class='posthead'>".
$a ;


echo "</div>
<div class='postbody'>".
$b."
</div>
<div class='postfoot'>
Author : $d";

echo "</div>
</div>";
			} }
			
			else
				
				{
					$a = $row1['header'];
			$b = $row1['content'];
			$c = $row1['id'];
			$d = $row1['author'];
			echo "<div class='postsss'>
<div class='posthead'>".
$a ;


echo "</div>
<div class='postbody'>".
$b."
</div>
<div class='postfoot'>
Author : $d";

echo "</div>
</div>";
				}
		
		}
		
		
 }
 else
 {
   
	    echo "<h2> No Post Found </h2>";
}


?>


</div>



</body>
</html>
