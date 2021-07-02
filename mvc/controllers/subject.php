<?php
    class subject extends Controller{
        public function index(){
            $result = $this->model('subjectModel')->showSubject();
            return $this->view("masterlayout",[
                'page'=>'subject',
                'title'=>'Môn học',
                'subject'=>$result
            ]);
        }
        public function editSubject(){
            if(isset($_POST['btnSubmit'])){
                $subject_id=$_POST['subject_id'];
                $subject_name=$_POST['subject_name'];
                $credit=$_POST['credit'];
                $pattern_credit='/^[1-9]{1,2}$/';
                $pattern_subjectName='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
                if(empty($subject_name)||empty($credit)){
                    $this->backPage('subject','error','Vui lòng nhập đẩy đủ thông tin.');
                }elseif (!preg_match($pattern_credit,$credit)) {
                    $this->backPage('subject','error','Vui lòng nhập số tín chỉ chữ số từ 1 đến 2 kí tự.');
                }elseif (!preg_match($pattern_subjectName,$subject_name)) {
                    $this->backPage('subject','error','Vui lòng không kí tự đặc biệt.');
                }else {
                    $result=$this->model('subjectModel')->editSubject($subject_id,$subject_name,$credit);
                    if($result){
                        $this->backPage('subject','success','Chỉnh sửa thông tin thành công.');
                    }else{
                        $this->backPage('subject','error','Chỉnh sửa thông tin thất bại.');
                    };
                }
            };
        }
        public function deleteSubject($id){
            $result=$this->model('subjectModel')->deleteSubject($id);
            if($result){
                $this->backPage('subject','success','Xóa thành công');
            }else{
                $this->backPage('subject','error','Xóa thông tin thất bại');
            };
        }
        public function addSubject(){
            if(isset($_POST['btnSubmit'])){
                $subject_name=$_POST['subject_name'];
                $credit=$_POST['credit'];
                $pattern_credit='/^[1-9]{1,2}$/';
                $pattern_subjectName='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
                if(empty($subject_name)||empty($credit)){
                    $this->backPage('subject','error','thatbai');
                }else if(!preg_match($pattern_subjectName,$subject_name)){
                    $this->backPage('subject','error','Vui lòng không nhập kí tự đặc biệt và độ dài từ 3 đến 100 kí tự');
                }else if(!preg_match($pattern_credit,$credit)){
                    $this->backPage('subject','error','Vui lòng nhập kí tự số và từ 1 đến 2 kí tự');
                }else {
                    $result=$this->model('subjectModel')->addSubject($subject_name,$credit);
                    if($result){
                        $_SESSION['success']="Thêm thành công.";
                        return $result;
                    }else{
                        $_SESSION['error']="Thêm thất bại.";
                        return $result;
                    }   
                }
            }
        }
    }
?>