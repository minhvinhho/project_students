<?php
    class statistical_Stu_faculty extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_Stu_facultyModel')->showStatistical_Stu_faculty();
            return $this->view("masterlayout", [
                'page'=>'statistical_Stu_faculty',
                'title'=>'Thống kê số lượng sinh viên theo khoa',
                'statistical_Stu_faculty'=>$result
            ]);
        }
    }
?>