<?php
class RegisterModel extends Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($names, $lastnames, $typedocument, $document, $expeditionDate, $birthdate, $institute, $career){
        try {
            $query = $this->db->connect()->prepare('INSERT INTO `student`(`Names`, `Lastnames`, `Identify`, `DocType`, `ExpeditionDoc`, `Birthdate`, `InstituteGrduate`, `Career`) VALUES (?,?,?,?,?,?,?,?);');
            $query->bind_param("ssssssss", $names, $lastnames, $document, $typedocument, $expeditionDate, $birthdate, $institute, $career);
            $query->execute();
            $query->close();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}