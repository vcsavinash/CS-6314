<?php session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_username'])) {
  	header('location: login.html');
  	exit();
}else{
$uname = $_SESSION['sess_username'];
$fname = $_SESSION['sess_fullname'];
$img = $_SESSION['sess_animal'];
echo "Hi! ";
print "$fname($uname)";
$dir = '/img';
$fish = 'fish.png';
$turtle = 'turtle.png';
$lion = 'lion.jpeg';
$fox = 'fox.jpeg';
if($img == "fish"){
	echo '<img src = "'.$dir.'/'.$fish.'"/>';
}else if($img == "turtle"){
	echo '<img src = "'.$dir.'/'.$turtle.'"/>';
}else if($img == "lion"){
	echo '<img src = "'.$dir.'/'.$lion.'"/>';
}else if($img == "fox"){
	echo '<img src = "'.$dir.'/'.$fox.'"/>';
}
}
?>