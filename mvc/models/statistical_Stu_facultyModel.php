<?php
class statistical_Stu_facultyModel extends DB
{
    public function showStatistical_Stu_faculty()
    {
        $stmt=$this->link->prepare("SELECT faculty.faculty_id,faculty.faculty_name , Count(students_id) as quantity_stu
        FROM faculty 
        INNER JOIN class ON faculty.faculty_id = class.faculty_id
        INNER JOIN students ON class.class_id = students.class_id
        GROUP BY faculty.faculty_id");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>