<?php
class statistical_RankModel extends DB
{
    public function showStatistical_Rank()
    {
        $stmt=$this->link->prepare("SELECT students.students_name, points.students_id, AVG(points.point) as AVG_Stu,
        CASE
        WHEN AVG(point) >= 8 THEN 'Giỏi'
        WHEN  AVG(point) >= 6.5 THEN 'Khá'
        WHEN AVG(point) >= 5 THEN 'Trung Bình'
        ELSE 'Yếu'
        END rank_stu
        From points, students
        Group By students_id");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
}
?>