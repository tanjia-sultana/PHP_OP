<?php
$mimeType=[
    'image/jpeg',
    'image/png',
    'image/gif',
    'application/pdf',
    'application/msword',   //doc
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'   //docx
];

$mess="";

if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    if($file['error'] == 0){
        if(in_array($file['type'],$mimeType) == false){
            $mess = "<span style='color:red'> file must be image/pdf/document </span>";
        }elseif($file['size'] > 409600){
            $mess ="<span style='color:tomato'> file can't be upload more than 400 kb </span>";
        }else{
            move_uploaded_file($file['tmp_name'],'save_image/' . $file['name']);
            $mess ="<span style='color:green'>file upload Successful </span>";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" ><br><br>
        <p><?php echo $mess ;?></p>
        <input type="submit" value="Save">
    </form>
</body>
</html>