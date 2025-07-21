<?php
$meg="";
if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(strlen($name)<4 || strlen($name)>8){
        $meg = "user name must be 4 character to 8 character";
    }elseif(strpos($name,'@') === false){
        $meg ="usernme must be include @ sign";
    }else{
        header("location:welcome.php");
        $meg ="login SuccessFull";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginReg</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <p><?php echo $meg  ;?></p>
        <input type="submit" value="login">
    </form>
</body>
</html>