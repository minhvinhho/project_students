<?php
class statistical_Subj_facultyModel extends DB
{
    public function showStatistical_Subj_faculty()
    {
        $stmt=$this->link->prepare("SELECT faculty.faculty_id, faculty.faculty_name, Count(subject.subject_id) as quantity_subj
        FROM faculty 
        INNER JOIN class ON faculty.faculty_id = class.faculty_id
        INNER JOIN students ON class.class_id = students.class_id
        INNER JOIN points ON students.students_id = points.students_id
        INNER JOIN subject ON points.subject_id = subject.subject_id
        GROUP BY faculty.faculty_id");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>