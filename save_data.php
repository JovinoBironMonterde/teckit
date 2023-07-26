<?php
// Retrieve the form data

$code = $_POST['code'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection details
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ticket_db';

// Create a new mysqli instance
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
  die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO tbl_ticket (`code`,  `name`, `contact`, `email`, `message`) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("sssss",  $code, $name, $contact, $email, $message);
$stmt->execute();

// Check for errors during execution
if ($stmt->error) {
  die('Error: ' . $stmt->error);
}

// Close the statement and the database connection
$stmt->close();
$mysqli->close();

echo "Data saved successfully!";
?>

