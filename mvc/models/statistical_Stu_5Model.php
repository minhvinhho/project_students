<?php
class statistical_Stu_5Model extends DB
{
    public function showStatistical_Stu_5()
    {
        $stmt=$this->link->prepare("SELECT faculty.faculty_name,students.students_name ,AVG(points.point) AVG_Students
        From points, faculty,students
        group by points.students_id
        having  AVG_Students < 5");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>