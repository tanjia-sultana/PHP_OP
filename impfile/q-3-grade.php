<?php
if (!empty($_POST['grade'])) {
    $usermarks = $_POST['grade'];
    if ($usermarks === "A") {
        echo "$usermarks excellent";
    } elseif ($usermarks === "B") {
        echo "$usermarks good";
    } elseif ($usermarks === "C") {
        echo "$usermarks fair";
    } elseif ($usermarks === "D") {
        echo "$usermarks poor";
    } else{
        echo "$usermarks failure";
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
    <form action="" <?php echo $_SERVER['PHP_SELF']; ?> method="post">
        ENTER GRADE:<br><input type="text" name="grade">
        <button type="submit">Submit</button>
    </form>

</body>
</html>