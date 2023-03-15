<?php

namespace app\common\model;

use think\Model;

class User extends Model
{
    // 直接使用配置参数名
    protected $connection = 'db_config_2';
    // 主键名称，默认id
    //protected $pk = 'id';
    // 数据表名称
    protected $table = 'user';

    /**
     * gender字段的获取器
     *
     * @param $value
     * @param $data
     *
     * @return string
     */
    public function getGenderTextAttr($value, $data)
    {
        $map = [
            1 => '男',
            2 => '女',
        ];
        return $map[$data['gender']];
    }

    /**
     * add_time字段的获取器
     *
     * @param $value
     * @param $data
     *
     * @return false|string
     */
    public function getAddTimeTextAttr($value, $data)
    {
        return date('Y-m-d H:i:s', $data['add_time']);
    }
}