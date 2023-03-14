<?php

namespace app\index\behavior;

class IndexEnd
{
    public function run($params)
    {
        var_dump("行为[index_end]开始执行，参数：" . json_encode($params));
    }
}