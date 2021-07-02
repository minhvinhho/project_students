<?php
class subjectModel extends DB{
    public function showSubject(){
        $stmt=$this->link->prepare("SELECT * FROM subject");
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    public function editSubject($subject_id,$subject_name,$credit){
        $stmt=$this->link->prepare("update subject set subject_name=:subject_name,credit=:credit where subject_id=:subject_id ");
        $result=$stmt->execute([
            'subject_name'=>$subject_name,
            'credit'=>$credit,
            'subject_id'=>$subject_id,
        ]);
        return ($result)?true:false;
    }
    public function deleteSubject($id){
        $stmt=$this->link->prepare("delete from subject where subject_id=?");
        $result=$stmt->execute([$id]);
        return ($result)?true:false;
    }
    public function addSubject($subject_name,$credit){
        $stmt=$this->link->prepare("INSERT INTO subject(subject_name, credit) VALUES (:subject_name,:credit)");
        $result=$stmt->execute([
            'subject_name'=>$subject_name,
            'credit'=>$credit,
        ]);
        return ($result)?true:false;
    }
}
?>