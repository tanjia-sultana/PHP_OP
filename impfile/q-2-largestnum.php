<?php
$result ="";
if(!empty($_POST['num1']) && !empty($_POST['num2'])&& !empty($_POST['num3'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    if($num1>$num2 && $num1>$num3){
        $result = "$num1 is largest number";
    }
    else if($num2>$num1 && $num2>$num3){
        $result = "$num2 is largest number";
    }
    else{
        $result = "$num3 is largest number";
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
    <form action="" method="post"><br>
     Enter number 1:<br>
        <input type="number" name="num1"><br>
      Enter number 2:<br>
    
    
       
        <input type="number" name="num2"><br>
          Enter number 3:<br>
        <input type="number" name="num3"><br><br>
        
        <input type="submit" value="submit">
    </form>
    <h2><?php echo $result; ?></h2>
</body>
</html>