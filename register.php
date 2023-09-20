
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-container">
        <h2 class="text-center">Register</h2>
        <form action="register_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <label for="contact">Contact:</label>
            <input type="text" name="contact" required><br>
            <input type="submit" value="Register" class="text-success">
        </form>
    </div>
</body>
</html>

