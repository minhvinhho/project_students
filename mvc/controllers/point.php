<?php
    class point extends Controller{
        public function index(){
            $result = $this->model('pointModel')->showPoint();
            return $this->view("masterlayout",[
                'page'=>'point',
                'title'=>'Điểm số',
                'point'=>$result
            ]);
        }
        public function editPoint(){
            if(isset($_POST['btnSubmit'])){
                $subject_id=$_POST['subject_id'];
                $students_id=$_POST['students_id'];
                $times=$_POST['times'];
                $point=$_POST['point'];
                $pattern='/^[0-9]{1,2}$/';
                if(empty($times)||empty($point)){
                    $this->backPage('point','error','Vui lòng nhập đẩy đủ thông tin.');
                }else if(!preg_match($pattern,$times)){
                    $this->backPage('point','error','Vui lòng nhập số lần thi không quá 2 kí tự.');
                }else if(!is_numeric($point)){
                    $this->backPage('point','error','Vui lòng nhập chữ số.');
                }else if($point>10){
                    $this->backPage('point','error','Vui lòng nhập điểm dưới 10.');
                }else {
                    $result=$this->model('pointModel')->editPoint($subject_id,$students_id,$times,$point);
                    if($result){
                        $this->backPage('point','success','Chỉnh sửa điểm thành công');
                    }else {
                        $this->backPage('point','error','Chỉnh sửa điểm thất bại');
                    }
                }
            }
        }
        public function deletePoint($id){
            $result=$this->model('pointModel')->deletePoint($id);
            if($result){
                $this->backPage('point','success','Xóa thông tin sinh viên thành công.');
            }else{
                $this->backPage('point','error','Xóa thông tin sinh viên thất bại.');
            }
        }
    }


?>