<?php
class studentModel extends DB{
    public function showStudent(){
        $stmt=$this->link->prepare("SELECT students_id,students_name,gender,address,class.class_name,class.class_id FROM students INNER JOIN class ON students.class_id=class.class_id;");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    public function editStudent($student_id,$student_name,$gender,$address){
        $stmt=$this->link->prepare("update students set students_name=:student_name,gender=:gender,address=:address where students_id=:student_id");
        $result=$stmt->execute([
            'student_name'=>$student_name,
            'gender'=>$gender,
            'address'=>$address,
            'student_id'=>$student_id
        ]);
        return ($result)?true:false;
    }
    public function deleteStudent($id){
        $stmt=$this->link->prepare("delete from students where students_id=?");
        $result=$stmt->execute([$id]);
        return ($result)?true:false;
    }
    public function addStudent($students_name,$gender,$address,$class_id){
        $stmt=$this->link->prepare("INSERT INTO students(students_name,gender,address,class_id) VALUES (:students_name,:gender,:address,:class_id)");
            $result=$stmt->execute([
                'students_name'=>$students_name,
                'gender'=>$gender,
                'class_id'=>$class_id,
                'address'=>$address
            ]);
            return ($result)?true:false;
    }
}

?>