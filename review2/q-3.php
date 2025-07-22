<?php
$error = "";
$uploadedfile = "";
$success = "";
$fileTypes = [
    'image/pdf',
    'image/jpeg',
    'image/png',
    'image/gif',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
];
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    if($file['error'] == 0){
        if(in_array($file['type'],$fileTypes) == false){
            $error = "file must be image or word";
        }elseif($file['size'] > 409600){
            $error = "File can't be more than 400KB";
        }else{
            $uploadedfile = "upload/" . $file['name'];
            move_uploaded_file($file['tmp_name'],$uploadedfile);
            echo "File uploaded successfully";
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
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method = "POST" enctype = "multipart/form-data">
        <input type = "file" name = "file">
        <input type = "submit" value = "Upload">
        </form>
        <span style = "color:red;"><?php echo $error; ?></span>
       <span style = "color:green;"><?php echo $success; ?></span>
        <?php if($uploadedfile != ""){ 
              echo "<iframe src = '$uploadedfile' frameborder = '0' style = 'width:100%;height:500px;'></iframe>";
         } ?>
</body>
</html>