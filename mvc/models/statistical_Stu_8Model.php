<?php
class statistical_Stu_8Model extends DB
{
    public function showStatistical_Stu_8()
    {
        $stmt=$this->link->prepare("SELECT faculty.faculty_name,students.students_name ,AVG(points.point) AVG_Students
        From points, faculty,students
        group by points.students_id
        having  AVG_Students > 8");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>