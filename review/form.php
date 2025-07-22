<?php
require_once("student.php");
$result = "";
if(!empty($_POST['id'])){
    $student = new Student($_POST['id']);
    $result = $student->getStudentInfo($_POST['id']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Search</title>
</head>
<body>
    <h2>Search Students by ID: </h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="number" name="id">
        <input type="submit" value="Search">
    </form>
    <?php echo $result;?>
</body>
</html>