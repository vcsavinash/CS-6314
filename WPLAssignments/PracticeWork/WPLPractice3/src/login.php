<?php session_start();

// Create connection
$conn = mysqli_connect("localhost", "root", "root","PW3");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST["username"];
$password=$_POST["password"];
$query = "SELECT username, password, email, fullname, power_animal FROM users WHERE username='$username'";
$result = mysqli_query($conn,$query);
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
         if(($password != $row["password"])&&($username != $row["username"]))// Incorrect password. So, redirect to login_form again.
		{
  			header('Location: login.html');
  			exit();
		}else{ // Redirect to home page after successful login.
  			$_SESSION['sess_username'] = $row["username"];
  			$_SESSION['sess_fullname'] = $row["fullname"];
  			$_SESSION['sess_animal'] = $row["power_animal"];
  			print $_SESSION['sess_username'];
  			header('Location: welcome.php');
		}
     }
} else {
		header('Location: login.html');
  		exit();
}

?> 
