<?php
$result ="";
if(isset($_POST['username'])){
    $username = $_POST['username'];
    if(strlen($username) >=4 && strlen($username) <=8){
        $result = "username must be between 4 and 8 characters";
    }elseif(strpos($username,"@") === false){
        $result = "username must be include @ symbol";
    }else{
        $result = "user registered sucessfully";
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
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method = "POST">
        <label>Enter Username:</label><br>
       <input type="text" name = "username" placeholder ="Enter Username">
       <input type = "submit" value = "Registration">
    </form>
    <h3 style = "color:red"><?php echo $result ?></h3>
</body>
</html>