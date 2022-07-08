<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])) {
	if(!empty($_POST['name']) && !empty($_POST['email'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$address = $_POST['address'];

		$query = "INSERT into form(name, email, age, address) values ('$name', '$email', '$age', '$address')";
		$run = mysqli_query($conn, $query) or die(mysqli_error());

		if ($run) {
			echo "Form submitted successfully";

		} else {
			echo "Not submitted";
		}
	}
	else {
		echo "All fields are required";
	}
}

?>