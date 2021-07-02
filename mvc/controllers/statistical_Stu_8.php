<?php
    class statistical_Stu_8 extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_Stu_8Model')->showStatistical_Stu_8();
            return $this->view("masterlayout", [
                'page'=>'statistical_Stu_8',
                'title'=>'Thống kê điểm sinh viên trên 8 mỗi khoa',
                'statistical_Stu_8'=>$result
            ]);
        }
    }
?>