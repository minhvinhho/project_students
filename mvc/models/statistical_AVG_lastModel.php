<?php
class statistical_AVG_lastModel extends DB
{
    public function showStatistical_AVG_last()
    {
        $stmt=$this->link->prepare("SELECT points.students_id, students.students_name ,AVG(points.point) AVG_Students, max(times)
        From points, students
        group by points.students_id");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>