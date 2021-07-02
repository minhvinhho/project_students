<?php

class Controller
{
    public function model($model)
    {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    public function view($view,$data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    public function rootUrl(){
        return "http://localhost:8080/";
    }
    public function backPage($class,$action,$message){
        $_SESSION[$action]=$message;
        $url=$this->rootUrl();
        header('Location:'.$url.$class);
    }
}   

?>