php
<?php
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, redirect to dashboard.php
        header("location: dashboard.php");
    } else {
        // Authentication failed, display an error message
        echo "Invalid username or password.";
    }
}

$conn->close();
?>

