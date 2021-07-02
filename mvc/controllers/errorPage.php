<?php


class errorPage extends Controller
{
    function index(){
        return $this->view("pages/404page");
    }
}