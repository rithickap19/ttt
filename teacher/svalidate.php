


<?php
require('dbcon.php');

$username = $_POST['sid'];
$password = $_POST["password"];

// SQL query to check user credentials
$sql = "SELECT * FROM treg WHERE stid='$username' AND stpassword='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Redirect to stu.html if login is successful
    
	 header("Location: admin_panel/index.php");

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
