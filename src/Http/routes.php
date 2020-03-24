<?php
/**
 * User: Ciano
 * Date: 2020/3/18
 * Time: 21:41
 */

Route::get('/','JunitController@index');
Route::post('/','JunitController@store')->name('junit.store');
// 测试路由
Route::get('test', 'TestController@index');