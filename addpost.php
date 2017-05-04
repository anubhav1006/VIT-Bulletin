<html>
<body>

<?php 

			
	 require("header.php");
	  include('check.php');
	  session_start();
	  $author = $_SESSION['userid'];

?>

<div id="divbody">
<div class="addpostdiv">
<form action="addpost.php" method="post">
<table> 
<tr>
<th colspan=2>ADD POST</th>
</tr>
<tr>
<th>Heading : </th><td><input type="text" name="heading"></td>
</tr>
<tr>
<th>Content : </th><td><textarea name="content" rows="10" cols="30">
</textarea></td>
</tr>
<tr>
<th colspan=2><input type="submit" value="+Post"></th>
</tr>


</table>
</form>
</div>	

</div>



</body>
</html>



<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER['REQUEST_METHOD']=="POST"){
	$heading = $_POST['heading'];
	$content = $_POST['content'];


$sql = "insert into post (header, content, author) VALUES ('$heading', '$content', '$author')";

if (mysqli_query($conn, $sql)) {
	
       
		echo "<script>alert('Posted Successfully');</script>";
} 

			else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

	
		?>