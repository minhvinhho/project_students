<?php
    class statistical_Subj_faculty extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_Subj_facultyModel')->showStatistical_Subj_faculty();
            return $this->view("masterlayout", [
                'page'=>'statistical_Subj_faculty',
                'title'=>'Thống kê số lượng sinh viên theo khoa',
                'statistical_Subj_faculty'=>$result
            ]);
        }
    }
?>