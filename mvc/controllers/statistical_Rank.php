<?php
    class statistical_Rank extends Controller
    {
        public function index()
        {
            $result = $this->model('statistical_RankModel')->showStatistical_Rank();
            return $this->view("masterlayout", [
                'page'=>'statistical_Rank',
                'title'=>'Thống kê xếp hạng sinh viên',
                'statistical_Rank'=>$result
            ]);
        }
    }
?>