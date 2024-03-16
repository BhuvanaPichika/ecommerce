
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="ecommerce";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

} 

if(isset($_POST['save']))
{	
	 $username = $_POST['username'];
	 $password = $_POST['password'];

	 $sql_query = "INSERT INTO user (username,password)
	 VALUES ('$username','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>