<?php
class statistical_AVG_classModel extends DB
{
    public function showStatistical_AVG_class()
    {
        $stmt=$this->link->prepare("SELECT points.students_id, students.students_name ,class.class_id ,class.class_name ,AVG(points.point) AVG_Students
        From points, class, students
        group by class.class_id");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>