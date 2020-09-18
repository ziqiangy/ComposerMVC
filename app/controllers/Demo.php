<?php
namespace controllers;

class Demo extends BaseControllers {

    public function index()
    {
        $this->assign("title", "@@@@@");
        $this->assign("one", "abc");
        $this->assign("two", "tttttt");
        $this->assign("list", array("aa"=>"bb","cc"=>"33333","ddd"=>"eeeeee"));

        $this->display("index");


    }

    public function page()
    {
        echo 'page';
    }

    public function view($id)
    {
        echo $id;
    }

}