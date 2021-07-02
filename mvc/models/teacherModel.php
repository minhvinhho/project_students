<?php
class teacherModel extends DB{
    public function showTeacher(){
        $stmt=$this->link->prepare("SELECT * FROM teacher");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    public function editTeacher($teacher_id,$teacher_name,$gender,$address){
        $stmt=$this->link->prepare("update teacher set teacher_name=:teacher_name,gender=:gender,address=:address where teacher_id=:teacher_id ");
        $result=$stmt->execute([
            'teacher_name'=>$teacher_name,
            'gender'=>$gender,
            'address'=>$address,
            'teacher_id'=>$teacher_id,
        ]);
        return ($result)?true:false;
    }
    public function deleteTeacher($id){
        $stmt=$this->link->prepare("delete from teacher where teacher_id=?");
        $result=$stmt->execute([$id]);
        return ($result)?true:false;
    }
    public function addTeacher($teacher_name,$gender,$address){
        $stmt=$this->link->prepare("INSERT INTO teacher(teacher_name, gender,address) VALUES (:teacher_name,:gender,:address)");
        $result=$stmt->execute([
            'teacher_name'=>$teacher_name,
            'gender'=>$gender,
            'address'=>$address
        ]);
        return ($result)?true:false;
    }
}
?>