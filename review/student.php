<?php
class Student{
    public $stu_id;
    public $stu_name;
    public $stu_batch;

    public function __construct($stu_id,$stu_name=null,$stu_batch=null){
        $this->stu_id = $stu_id;
        $this->stu_name = $stu_name;
        $this->stu_batch = $stu_batch;
    }
    public function getStudentInfo($stu_id){
        $file = fopen('students.csv', 'r');
        while($row = fgetcsv($file)){
            if($row[0] == $stu_id){
                return "Student ID: {$row[0]}<br>Name: {$row[1]}<br>Batch: {$row[2]}";
            };
        }
        fclose($file);
        return "Student ID: $stu_id Not Found!";
    }
}

?>