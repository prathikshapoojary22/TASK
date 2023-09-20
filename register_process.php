php
<?php
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO users (username, password, email, contact) VALUES ('$username', '$password', '$email', '$contact')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login page
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

