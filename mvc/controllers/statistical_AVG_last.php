<?php
    class statistical_AVG_last extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_AVG_lastModel')->showStatistical_AVG_last();
            return $this->view("masterlayout", [
                'page'=>'statistical_AVG_last',
                'title'=>'Thống kê điểm sinh viên thi lần cuối',
                'statistical_AVG_last'=>$result
            ]);
        }
    }
?>