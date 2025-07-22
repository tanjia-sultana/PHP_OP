<?php
$assostd = array("Lamia" => 70, "Rahim" => 85, "Karim" => 75, "Kamal" => 80, "Rakib" => 83);
$maxscore = max($assostd);
$maxasso = array_search($maxscore, $assostd);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
           <?php foreach($assostd as $name => $score){
             echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$score</td>";
            echo "</tr>";
           }
            
            
            
            
            ?>
        </tbody>
       
    </table>
    <br>
    <?php echo "The maximum score get by $maxasso is $maxscore."; ?>
</body>
</html>