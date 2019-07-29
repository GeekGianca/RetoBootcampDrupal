<?php
include_once 'models/studentmodel.php';
class RecordsModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function students_records(){
        $students = [];
        $resp = $this->db->connect()->query("SELECT `Names`, `Lastnames`, `Identify`, `DocType`, `InstituteGrduate`, `Career` FROM `student`;");
        while ($item = $resp->fetch_assoc()) {
            $student = new Student();
            $student->names = $item['Names'];
            $student->lastnames = $item['Lastnames'];
            $student->identify = $item['Identify'];
            $student->typedocument = $item['DocType'];
            $student->institute = $item['InstituteGrduate'];
            $student->career = $item['Career'];
            array_push($students, $student);
        }
        return $students;
    }
}