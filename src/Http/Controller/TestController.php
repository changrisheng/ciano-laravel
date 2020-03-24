<?php

namespace Ciano\CianoLaravel\Http\Controller;
use Illuminate\Routing\Controller;

/**
 * Class JunitController
 * 这是一个控制器 需要继承一个laravel所提供的控制器
 * @package Ciano\CianoLaravel\Http\Controller
 */
class TestController extends Controller
{
    public function index()
    {
        echo "这是一个测试路由";
    }
}