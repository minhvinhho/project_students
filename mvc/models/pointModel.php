<?php
    class pointModel extends DB{
        public function showPoint(){
            $stmt=$this->link->prepare("SELECT points.subject_id,points.students_id,points.times,points.point,subject.subject_name,students.students_name FROM points INNER JOIN subject ON points.subject_id=subject.subject_id INNER JOIN students ON points.students_id=students.students_id;");
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;
        }
        public function editPoint($subject_id,$students_id,$times,$point){
            $stmt=$this->link->prepare("update points set times=:times,point=:point where students_id=:students_id and subject_id=:subject_id");
            $result=$stmt->execute([
                'subject_id'=>$subject_id,
                'students_id'=>$students_id,
                'times'=>$times,
                'point'=>$point
            ]);
            return ($result)?true:false;
        }
        public function deletePoint($id){
            $stmt=$this->link->prepare("delete from points where students_id=?");
            $result=$stmt->execute([$id]);
            return ($result)?true:false;
        }
    }


?>