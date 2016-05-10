<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
    }

    public function check_login()
    {
        $allow = array("login", "do_login", "register", "do_register", "verify", "check_verify");
        if (CONTROLLER_NAME == "User" and in_array(ACTION_NAME, $allow)) {
            return;
        }

        if (!isset($_SESSION["admin"])) {
            $this->error("您还没有登录!", U('Admin/User/login'));
        }

        $this->assign("admin", $_SESSION["admin"]);

    }

}