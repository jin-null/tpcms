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
    <h1>用户注册</h1>
    <hr>
    <div class="alert alert-danger" role="alert" id="errors">

    </div>

    <form class="form-horizontal" action="<?php echo U('do_register');?>" method="post">
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
            <label for="inputPassword2" class="col-sm-2 control-label">确认密码</label>

            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword2" placeholder="请输入确认密码">
            </div>
        </div>
        <!--<div class="form-group">-->
        <!--<div class="col-sm-offset-2 col-sm-10">-->
        <!--<div class="checkbox">-->
        <!--<label>-->
        <!--<input type="checkbox"> Remember me-->
        <!--</label>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default do_register">注册</button>
            </div>
        </div>
    </form>

    <a href="<?php echo U('login');?>">已有账号，立即登陆</a>
</div>


<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>

<script>
    $(function () {
        /***
         * 表单效验
         */
        $(".do_register").click(function () {
            var username = $.trim($("#inputUsername").val());
            var password = $.trim($("#inputPassword").val());
            var password2 = $.trim($("#inputPassword2").val());

            var errors = "";
            if (username == "") {
                errors += "<p>用户名不能为空！</p>";
                $("#inputUsername").focus();
            }

            if (password == "" || password2 == "") {
                errors += "<p>密码不能为空！</p>";
            }

            if (password != password2) {
                errors += "<p>两次密码不一致！</p>";
            }

            if (errors != "") {
                $("#errors").html(errors).fadeIn(300);
                return false;
            }
        });
    })
</script>
</body>
</html>