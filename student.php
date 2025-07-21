<?php
class Student{
    public $id;
    public $name;
    public $batch;
    public function __construct($idvalue="",$namevalue="",$batchvalue=""){
        $this->id = $idvalue;
        $this->name = $namevalue;
        $this->batch = $batchvalue;
    }
    //exam e 12 line to 28 line nai
    public function getdetalis(){
        if(file_exists("student.csv")){
            $file = fopen("student.csv","r");
            while($line = fgetcsv($file)){
                if($line['0'] == $this->id){
                    fclose($file);
                    return "<span style='color:red'>This ID is already Exits</span>";
                }
            }
            fclose($file);
        }
        $file = fopen("student.csv","a");
        $row =[$this->id,$this->name,$this->batch];
        fputcsv($file,$row);
        fclose($file);
        return "Student Data Submittion Done";
    }

    public function search($idSearch){
        $file = fopen("student.csv","r");
        while($searchRow = fgetcsv($file)){
            if($searchRow[0] == $idSearch){
                return " Id : $searchRow[0]<br>Name : $searchRow[1]<br>Batch : $searchRow[2]";
            }
        }
        fclose($file);
        return "<span style='color:red'> Id $idSearch doesn't Match</span>";
    }

}
//exam e 44 line to 48 line nai

$mega="";
if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['batch'])){
    $newStudent = new Student($_POST['id'],$_POST['name'],$_POST['batch']);
    $mega= $newStudent->getdetalis();
}

$message="";
if(!empty($_POST['searchId'])){
    $SearchStudent = new Student();
    $message = $SearchStudent->search($_POST['searchId']);
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
    <!-- 67 to 77 line nai exam e  -->
    
    <h3><?php echo $mega ;?></h3>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="number" name="id" placeholder="Enter Your Id"><br><br>
        <input type="text" name="name" placeholder="Enter Your name"><br><br>
        <select name="batch" >
            <option value="Gave">Gave</option>
            <option value="WDPF">WDPF</option>
            <option value="IT">IT</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
    <h1>Search Id</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="number" name="searchId" placeholder="Search your id">
        <input type="submit" value="Search">
    </form>
    <h3><?php echo $message ;?></h3>
</body>
</html>