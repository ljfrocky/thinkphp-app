<?php
namespace app\index\controller;

use think\facade\Hook;

class Index extends Base
{
    public function index()
    {
        Hook::add('index_start',function() {
            var_dump("这是通过Hook::add方法给[index_start]添加的行为，必须在Hook::listen之前添加");
        });

        Hook::listen('index_start', ['a']);
        Hook::listen('index_end', ['b']);
        return "正文内容";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
