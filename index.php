<?php
    require('vendor/autoload.php');

    use NoahBuscher\Macaw\Macaw;

    Macaw::get('/', function() {
        echo 'Welcome to My first Webpage!';
    });


    // 'admin' 访问路径
    // admin\admin@index 包名/类名/方法名
    Macaw::get('admin', 'admin\Admin@index');
    Macaw::get('admin/add', 'admin\Admin@add');

    Macaw::get('home', 'home\Home@index');
    Macaw::get('home/add', 'home\Home@add');

    Macaw::dispatch();
