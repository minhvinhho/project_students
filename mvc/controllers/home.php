<?php
    class home extends Controller{
        public function index(){
            return $this->view("masterlayout",[
                "page"=>"home",
                "title"=>"Trang chủ"
            ]);
        }
        public function showeditpage(){
            return $this->view("masterlayout",[
                "page"=>"edit",
                "title"=>"Chỉnh sửa"
            ]);
        }
    }

?>