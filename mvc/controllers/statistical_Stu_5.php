<?php
    class statistical_Stu_5 extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_Stu_5Model')->showStatistical_Stu_5();
            return $this->view("masterlayout", [
                'page'=>'statistical_Stu_5',
                'title'=>'Thống kê điểm sinh viên dưới 5 mỗi khoa',
                'statistical_Stu_5'=>$result
            ]);
        }
    }
?>