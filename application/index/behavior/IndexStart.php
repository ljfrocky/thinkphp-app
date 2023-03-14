<?php

namespace app\index\behavior;

class IndexStart
{
    public function run($params)
    {
        var_dump("行为[index_tart]开始执行，参数：" . json_encode($params));
    }
}