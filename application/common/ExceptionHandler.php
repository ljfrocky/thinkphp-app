<?php
/**
 * 自定义的异常处理类
 */

namespace app\common;

use think\exception\Handle;

class ExceptionHandler extends Handle
{
    protected $ignoreReport = [];
}