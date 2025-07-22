<?php
$result = "";
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    if (strlen($username) < 4 || strlen($username) > 8) {
        $result = "Username must be between 4 and 8 characters";
    } elseif (strpos($username, "@") === false) {
        $result = "Username must include @ symbol";
    } else {
        $result = "User Registered Successfully!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Validation</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="submit" value="Register">
    </form>
    <h5><?= $result ?></h5>
</body>
</html>