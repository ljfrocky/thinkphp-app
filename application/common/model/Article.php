<?php

namespace app\common\model;

use think\Model;

class Article extends Model
{
    // 直接使用配置参数名
    protected $connection = 'db_config_1';
    // 主键名称，默认id
    //protected $pk = 'id';
    // 数据表名称
    protected $table = 'articles';
}