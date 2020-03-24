<?php
namespace app\admin\controller;

use app\common\Config\Config;
use think\Controller;

class Login extends Controller
{


    public function login()
    {
        return $this->fetch();
    }

}
