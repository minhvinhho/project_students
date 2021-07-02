<?php
class faculty extends Controller{
    public function index(){
        $result = $this->model('facultyModel')->showFaculty();
            return $this->view("masterlayout",[
                'page'=>'faculty',
                'title'=>'Khoa',
                'faculty'=>$result
            ]);
    }
    public function editFaculty(){
        if(isset($_POST['btnSubmit'])){
            $faculty_id=$_POST['faculty_id'];
            $faculty_name=$_POST['faculty_name'];
            $patter='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
            if(empty($faculty_name)){
                $this->backPage('faculty','error','Vui lòng nhập đầy đủ thông tin');
            }
            else if(!preg_match($patter,$faculty_name)){
                $this->backPage('faculty','error','Tên Khoa không được có kí tự đặc biệt và từ 5 đến 100 kí tự.');
            }
            else{
                $result=$this->model('facultyModel')->editFaculty($faculty_id,$faculty_name);
                if($result){
                    $this->backPage('faculty','success','Chỉnh sửa thông tin thành công');
                }else{
                    $this->backPage('faculty','error','Chỉnh sửa thông tin thất bại');
                }
            }
        };
    }
    public function deleteFaculty($id){
        $result=$this->model('facultyModel')->deleteFaculty($id);
        if($result){
            $this->backPage('faculty','success','Xóa thông tin sinh viên thành công.');
        }else{
            $this->backPage('faculty','error','Xóa thông tin sinh viên thất bại.');
        }
    }
    public function addFaculty(){
        $faculty_name=$_POST['faculty_name'];
        $patter=$patter='/^([a-zA-Z0-9àáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ\s]{5,100})$/i';
        if(empty($faculty_name)){
            $this->backPage('faculty','error','Vui lòng nhập đầy đủ thông tin');
        }
        else if(!preg_match($patter,$faculty_name)){
            $this->backPage('faculty','error','Tên Khoa không được có kí tự đặc biệt và từ 5 đến 100 kí tự.');
        }else {
            $result=$this->model('facultyModel')->addFaculty($faculty_name);
            if($result){
                $this->backPage('faculty','success','Thêm thông tin khoa thành công.');
            }else {
                $this->backPage('faculty','error','Thêm thông tin khoa thất bại.');
            }
        }
    }
}
?>