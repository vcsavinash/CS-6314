<?php header("Content-Type: text/html; charset=ISO-8859-1");

// Create connection
$conn = mysqli_connect("localhost", "root", "root","hw3");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$year=$_POST["year"];
$gender=$_POST["gender"];
if((isset($_POST["year"]) && !empty($_POST["year"]) && ($_POST["year"]=="all")) && (isset($_POST["gender"]) && !empty($_POST["gender"]) && ($_POST["gender"]=="all"))) {
	$query = "SELECT name, year, ranking, gender FROM babynames";
	$result = mysqli_query($conn,$query);
	echo "<table><caption>Year:".$year." Gender:".$gender."</caption><tr><th>Name</th><th>Ranking</th></tr>";
	 while($row = $result->fetch_assoc()) {
	 	echo "<tr><td>".$row["name"]."</td>";
	 	//echo "<td>".$row["year"]."</td>";
	 	echo "<td>".$row["ranking"]."</td>";
	 	//echo "<td>".$row["gender"]."</td></tr>";
	 }
	 echo "</table>";
} else if((isset($_POST["year"]) && !empty($_POST["year"]) && ($_POST["year"]=="all")) && (isset($_POST["gender"]) && !empty($_POST["gender"]))) {
	$query = "SELECT name, year, ranking, gender FROM babynames WHERE gender='$gender'";
	$result = mysqli_query($conn,$query);
	echo "<table><caption>Year:".$year." Gender:".$gender."</caption><tr><th>Name</th><th>Ranking</th></tr>";
	 while($row = $result->fetch_assoc()) {
	 	echo "<tr><td>".$row["name"]."</td>";
	 	//echo "<td>".$row["year"]."</td>";
	 	echo "<td>".$row["ranking"]."</td>";
	 	//echo "<td>".$row["gender"]."</td></tr>";
	 }
	 echo "</table>";
} else if((isset($_POST["year"]) && !empty($_POST["year"])) && (isset($_POST["gender"]) && !empty($_POST["gender"]) && ($_POST["gender"]=="all"))) {
	$query = "SELECT name, year, ranking, gender FROM babynames WHERE year='$year'";
	$result = mysqli_query($conn,$query);
	echo "<table><caption>Year:".$year." Gender:".$gender."</caption><tr><th>Name</th><th>Ranking</th></tr>";
	 while($row = $result->fetch_assoc()) {
	 	echo "<tr><td>".$row["name"]."</td>";
	 	//echo "<td>".$row["year"]."</td>";
	 	echo "<td>".$row["ranking"]."</td>";
	 	//echo "<td>".$row["gender"]."</td></tr>";
	 }
	 echo "</table>";
} else if((isset($_POST["year"]) && !empty($_POST["year"])) && (isset($_POST["gender"]) && !empty($_POST["gender"]))) {
	$query = "SELECT name, year, ranking, gender FROM babynames WHERE year='$year' AND gender='$gender'";
	$result = mysqli_query($conn,$query);
	echo "<table><caption>Year:".$year." Gender:".$gender."</caption><tr><th>Name</th><th>Ranking</th></tr>";
	 while($row = $result->fetch_assoc()) {
	 	echo "<tr><td>".$row["name"]."</td>";
	 	//echo "<td>".$row["year"]."</td>";
	 	echo "<td>".$row["ranking"]."</td>";
	 	//echo "<td>".$row["gender"]."</td></tr>";
	 }
	 echo "</table>";
}
?> 