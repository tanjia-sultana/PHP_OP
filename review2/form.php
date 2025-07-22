<?php 
require_once("q-2.php");
$result = "";
if(!empty($_POST['id'])){
    $student = new student ($_POST['id']);
    $result = $student->result($_POST['id']);
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
    <form action = " <?php echo $_SERVER['PHP_SELF'];?>" method = 'post'> 
     <input type = "number" name ="id">
     <input type = "submit" value="Search"> 
</form>
<h2><?php echo $result; ?> </h2>
</body>
</html>