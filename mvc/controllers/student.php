<?php
    class student extends Controller{
        public function index(){
            $result = $this->model('studentModel')->showStudent();
            return $this->view("masterlayout",[
                'page'=>'student',
                'title'=>'Sinh viên',
                'student'=>$result
            ]);
        }
        public function editStudent(){
            if(isset($_POST['btnSubmit'])){
                $student_id=$_POST['student_id'];
                $student_name=$_POST['student_name'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                $pattern_student_name='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéẹẻếẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
                $pattern_address='/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéếêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\/-]{10,200})$/i';
                // echo $address;
                if(empty($student_name)||empty($gender)||empty($address)){
                    $this->backPage('student','error','Vui lòng nhập đẩy đủ thông tin.');
                }
                else if(!preg_match($pattern_student_name,$student_name)){
                    $this->backPage('student','error','Tên không được dùng kí tự đặc biệt và từ 5 đến 100 kí tự.');
                }
                else if(!preg_match($pattern_address,$address)){
                    $this->backPage('student','error','Địa chỉ từ 10 đến 100 kí tự có thể dùng dấu / hoặc -');
                }
                else{
                    $result=$this->model('studentModel')->editStudent($student_id,$student_name,$gender,$address);
                    if($result){
                        $this->backPage('student','success','Chỉnh sửa thông tin thành công.');
                    }else{
                        $this->backPage('student','error','Chỉnh sửa thông tin thất bại.');
                    };
                }
            }
        }
        public function deleteStudent($id){
            $result=$this->model('studentModel')->deleteStudent($id);
            if($result){
                $this->backPage('student','success','Xóa thông tin sinh viên thành công.');
            }else{
                $this->backPage('student','error','Xóa thông tin sinh viên thất bại.');
            }
        }
        public function addStudent(){
            if(isset($_POST['btnSubmit'])){
                $students_name=$_POST['students_name'];
                $gender=$_POST['gender'];
                $class_id=$_POST['class'];
                $address=$_POST['address'];
                $pattern_student_name='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéẹẻếẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
                $pattern_address='/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéếêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\/-]{10,200})$/i';
                if(empty($students_name)||empty($gender)||empty($class_id)||empty($address)){
                    $this->backPage('student','error','Vui lòng nhập đầy đủ thông tin.');
                }else if (!preg_match($pattern_student_name,$students_name)) {
                    $this->backPage('student','error','Tên không được nhập kí tự đặc biệt từ 5 đến 100 kí tự.');
                }else if (!preg_match($pattern_address,$address)) {
                    $this->backPage('student','error','Địa chỉ không được nhập kí tự đặc biệt từ 10 đến 100 kí tự.');
                }else{
                    $result=$this->model('studentModel')->addStudent($students_name,$gender,$address,$class_id);
                    if($result){
                        $this->backPage('student','success','Thêm sinh viên thành công.');
                    }else {
                        $this->backPage('student','error','Thêm sinh viên thất bại.');
                    }
                }
            }
        }
    }


?>