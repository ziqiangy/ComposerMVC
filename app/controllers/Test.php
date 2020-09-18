<?php


namespace controllers;
use models\User;

class Test extends BaseControllers
{
    function index() {
        $user = new User();
        $data = $user->select('user','*');

        $this->assign("userlist",$data);
        $this->display("userlist");
    }
}