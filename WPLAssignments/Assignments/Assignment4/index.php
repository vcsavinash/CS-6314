<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "root","PW5");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	 
$uid = $_GET['uid'];
    if($uid != ""){
        $qur1 = mysqli_query($conn,"SELECT book_id,price,title,category,year FROM Book where book_id='$uid'");
        while($row = $qur1->fetch_assoc()) {
	 	$return_arr[] = array("book_id" => $row["book_id"],
	 						  "title" => $row["title"],
	 						  "year" => $row["year"],
	 						  "price" =>  $row["price"],
	    					  "category" => $row["category"]);
		}
    }else{
        $qur = mysqli_query($conn,"SELECT book_id,price,title,category,year FROM Book");
        while($row = $qur->fetch_assoc()) {
	 	$return_arr[] = array("book_id" => $row["book_id"],
	 						  "title" => $row["title"],
	 						  "year" => $row["year"],
	 						  "price" =>  $row["price"],
	    					  "category" => $row["category"]);
		}
    }
    header('Content-type: application/json');
	echo json_encode($return_arr);
?>