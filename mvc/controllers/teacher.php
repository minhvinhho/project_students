<?php
    class teacher extends Controller{
        public function index(){
            $result = $this->model('teacherModel')->showTeacher();
            return $this->view("masterlayout",[
                'page'=>'teacher',
                'title'=>'Giáo viên',
                'teacher'=>$result
            ]);
        }
        public function editTeacher(){
            if(isset($_POST['btnSubmit'])){
                $teacher_id=$_POST['teacher_id'];
                $teacher_name=$_POST['teacher_name'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                $pattern_teacher_name='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéếẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
                $pattern_address='/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãếèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\/-]{10,200})$/i';
                if(empty($teacher_name)||empty($gender)||empty($address)){
                    $this->backPage('teacher','error','Vui lòng nhập đầy đủ thông tin.');
                }
                else if(!preg_match($pattern_teacher_name,$teacher_name)){
                    $this->backPage('teacher','error','Tên giáo viên không được nhập kí tự đặc biệt và từ 5 đến 100 kí tự.');
                }
                elseif (!preg_match($pattern_address,$address)) {
                    $this->backPage('teacher','error','Địa chỉ không nhập kí tự đặc biệt và có thể dùng dấu /');
                }
                else{
                    $result=$this->model('teacherModel')->editTeacher($teacher_id,$teacher_name,$gender,$address);
                    if($result){
                        $this->backPage('teacher','success','Chỉnh sửa thông tin thành công.');
                    }else{
                        $this->backPage('teacher','error','Chỉnh sửa thông tin thất bại.');
                    };
                }
            };
        }
        public function deleteTeacher($id){
            $result=$this->model('teacherModel')->deleteTeacher($id);
            if($result){
                $this->backPage('teacher','success','Xóa thông ting giáo viên thành công.');
            }else{
                $this->backPage('teacher','error','Xóa thông ting giáo viên thất bại.');
            }
        }
        public function addTeacher(){
            if(isset($_POST['btnSubmit'])){
                $teacher_name=$_POST['teacher_name'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                $pattern_teacher_name='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫếậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
                $pattern_address='/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàếáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\/-]{10,200})$/i';
                if(empty($teacher_name)||empty($gender)||empty($address)){
                    $this->backPage('teacher','error','Vui lòng nhập đẩy đủ thông tin.');
                }elseif (!preg_match($pattern_teacher_name,$teacher_name)) {
                    $this->backPage('teacher','error','Tên giáo viên không được nhập kí tự đặc biệt và từ 10 đến 100 kí tự.');
                }else if(!preg_match($pattern_address,$address)){
                    $this->backPage('teacher','error','Địa chỉ không nhập kí tự đặc biệt và có thể dùng dấu / hoặc -');
                }else{
                    $result=$this->model('teacherModel')->addTeacher($teacher_name,$gender,$address);
                    if($result){
                        $this->backPage('teacher','success','Thêm giáo viên thành công.');
                    }else{
                        $this->backPage('teacher','error','Thêm giáo viên thất bại.');
                    }
                }   
            }
        }
    }


?>