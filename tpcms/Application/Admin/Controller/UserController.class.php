<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends CommonController
{
    var $user;

    function __construct()
    {
        parent::__construct();
        $this->user = D("User");
    }

    //管理员注册
    public function register()
    {
        $this->display();
    }

    public function do_register()
    {
        if (!$this->user->create()) {
            $this->error($this->user->getError());
            return;
        }

        $this->user->add();
        $this->success("创建成功~", U("login"));
    }


    public function login()
    {
        $this->display("login");
    }

    public function do_login()
    {
        $code = I("post.code");
        if (!$this->check_verify($code)) {
            $this->error("验证码错误!");
            exit;
        }

        $map["username"] = I("post.username");
        $map["password"] = md5(I("post.password"));
        $user = $this->user->where($map)->find();
        if(!$user) {
            $this->error("用户账号密码错误!");
        }

        $_SESSION["admin"] = $user;
        $this->success("登录成功", U("Admin/Index/index"));
    }

    //显示验证码
    public function verify()
    {
        $Verify = new \Think\Verify();
        $Verify->length = 4;
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }

    //检测验证码
    function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }


}