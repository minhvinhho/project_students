<?php
    class statistical_AVG_class extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_AVG_classModel')->showStatistical_AVG_class();
            return $this->view("masterlayout", [
                'page'=>'statistical_AVG_class',
                'title'=>'Thống kê điểm sinh viên theo lớp',
                'statistical_AVG_class'=>$result
            ]);
        }
    }
?>