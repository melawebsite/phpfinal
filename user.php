<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nature";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
	echo "connection succeful";
}else{
	echo "not connection";
}

//mysqli_select_db($conn,'nature');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];



$sql = "INSERT INTO god (user, email, mobile, comment)
VALUES ('$user', '$email', '$mobile', '$comment')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>