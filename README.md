# ciano-laravel

## 对于框架的要求
laravel >= 5.1


## 安装方式

```php
composer require ciano/ciano-laravel
```

## 配置方式
5.5手动配置laravel放到config/app.php中
```php
Ciano\CianoLaravel\Providers\JunitServiceProvider::class
```

## 解释路由
```php
Route::get('/','JunitController@index');
Route::post('/','JunitController@store')->name('junit.store');
```