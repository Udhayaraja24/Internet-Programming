<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="signup-container">
        <h2>Signup</h2>
        <form action="signup.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label>Gender:</label>
            <label for="male"><input type="radio" id="male" name="gender" value="male" required> Male</label>
            <label for="female"><input type="radio" id="female" name="gender" value="female" required> Female</label>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign up</button>
        </form>
    </div>
</body>
</html>
