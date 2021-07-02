<?php
    class facultyModel extends DB{
        public function showFaculty(){
            $stmt=$this->link->prepare("SELECT * FROM faculty");
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;
        }
        public function editFaculty($faculty_id,$faculty_name){
            $stmt=$this->link->prepare("update faculty set faculty_name=:faculty_name where faculty_id=:faculty_id");
            $result=$stmt->execute([
                'faculty_name'=>$faculty_name,
                'faculty_id'=>$faculty_id,
            ]);
            return ($result)?true:false;
        }
        public function deleteFaculty($id){
            $stmt=$this->link->prepare("delete from faculty where faculty_id=?");
            $result=$stmt->execute([$id]);
            return ($result)?true:false;
        }
        public function addFaculty($faculty_name){
            $stmt=$this->link->prepare("INSERT INTO faculty(faculty_name, faculty_master_id	) VALUES (:faculty_name,:faculty_master_id)");
            $result=$stmt->execute([
                'faculty_name'=>$faculty_name,
                'faculty_master_id'=>'1'
            ]);
            return ($result)?true:false;
        }
    }
    
    
?>