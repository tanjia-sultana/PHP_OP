<?php
$error = "";
$sucess = "";
$uploadedfile ="";
$fileTypes = [
    'image/jpeg',
    'image/png',
    'image/gif',
    'image/pdf',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
];

if(isset($_FILES['file'])){
  $file = $_FILES['file'];
  if($file['error'] == 0){
    if(in_array($file['type'] ,$fileTypes) == false){
        $error = "file must be img or word";
    }elseif($file['size'] > 400*1024){
         $error = "file can't be more than 400KB";
    }else{
        $uploadedfile = "upload/" . $file['name'];
        move_uploaded_file($file['tmp_name'],$uploadedfile);
        $sucess = "File Upload Sucessfully";
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
    <form action = "<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post" enctype = "multipart/form-data">
        <input type = "file" name = "file">
        <input type= "submit" value = "Upload">
</form>
<h2 style = "color:red;"> <?php echo $error; ?> </h2>
<h2 style = "color:green;"> <?php echo $sucess; ?> </h2>
<?php if($uploadedfile != ""){
  echo "<iframe src = '$uploadedfile' frameborder ='0' style =' width:500px; height:500px;'></iframe>";
  }
?>
</body>
</html>