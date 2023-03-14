<?php
/**
 * 自定义的异常处理类
 */

namespace app\common;

use Exception;
use think\exception\Handle;
use think\facade\App;

class ExceptionHandler extends Handle
{
    protected $ignoreReport = [];

    public function render(Exception $e)
    {
        if (request()->isAjax()) {
            $debugData = [];
            if (App::isDebug()) {
                $debugData = [
                    'debug_file'  => $e->getFile(),
                    'debug_line'  => $e->getLine(),
                    'debug_trace' => $e->getTrace(),
                ];
            }
            $errCode = $e->getCode();
            if ($errCode == 0) {
                $errCode = 500;
            }
            $data = [
                'status'  => 0,
                'code'    => $errCode,
                'message' => $e->getMessage(),
                'data'    => [],
            ];
            $data = array_merge($data, $debugData);
            return json($data, 500);
        }
        return parent::render($e);
    }
}