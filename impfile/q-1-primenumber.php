<?php
$result = "";
if (!empty($_POST['num'])) {
    $usernum = $_POST['num'];
    if ($usernum <= 1) {
        $result = "$usernum is not a prime number";
    } else {
        $result = "$usernum is a prime";
        for ($i = 2; $i <=$usernum/2; $i++) {
            if ($usernum % $i === 0) {
               $result = "$usernum is not a prime number";
                break;
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter number:<br>
        <input type="number" name="num">
        <input type="submit">
    </form>
    <p><?php echo $result; ?></p>
</body>
</html>