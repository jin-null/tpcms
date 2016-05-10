<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model
{
    protected $_auto = array (
        array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
    );

    protected $_validate = array(
        array('username','','帐号名称已经存在！',0,'unique',3), // 在新增的时候验证name字段是否唯一
    );
}