<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 30px;
        }

        #errors {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>用户登陆</h1>
    <hr>
    <div class="alert alert-danger" role="alert" id="errors">
    </div>

    <form class="form-horizontal" action="<?php echo U('do_login');?>" method="post">
        <div class="form-group">
            <label for="inputUsername" class="col-sm-2 control-label">用户名</label>

            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="请输入用户名">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">密码</label>

            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="请输入密码">
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label">验证码</label>

            <div class="col-sm-6">
                <input type="text" name="code" class="form-control" id="" placeholder="请输入验证码">
            </div>
            <div class="col-sm-2">
                <img src="" alt="" id="verify" style="cursor: pointer;">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rem" value="1"> 记住我
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default do_register">登陆</button>
            </div>
        </div>
    </form>

    <a href="<?php echo U('register');?>">还没有账号，立即注册</a>
</div>


<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>

<script>
    $(function(){
        var src = "/index.php/admin/user/verify/."+Math.random();
        $("#verify").attr('src', src);
//
//
//
        $("#verify").click(function(){
            var rand = Math.random();
            var src = "/index.php/Admin/User/verify/"+rand;
            $(this).attr('src', src);
        })
    })
</script>
</body>
</html>