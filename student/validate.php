
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "ttt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$username = $_POST["sid"];
$password = $_POST["password"];

// SQL query to check user credentials
$sql = "SELECT * FROM sreg WHERE rollno='$username' AND stupwd='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Redirect to stu.html if login is successful
    // echo "Hello";
	header("Location: student.php");

    exit();
} else {
    // Redirect back to the login form with an error message if login fails
   echo "No";
	// header("Location: index.html?error=1");
    exit();
}

// Close the database connection
$conn->close();
?>
