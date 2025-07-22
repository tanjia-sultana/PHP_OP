
<?php
$result = "";
if (!empty($_POST['num'])) {
    $usernum = $_POST['num'];
    $factorial = 1;
    for ($i = 1; $i <= $usernum; $i++) {
        $factorial *= $i;
    }
    $result = "Factorial of $usernum is $factorial";
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
        <input type="number" name="num">
        <button type="submit">Submit</button>
    </form>
    <div>
     <h2><?php echo $result; ?></h2>
    </div>
</body>
</html>