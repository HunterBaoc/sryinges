<?php
    // 包名
    namespace admin;
    
    // 继承controllers包名下的BaseControllers类
    use controllers\BaseControllers;

    class Admin extends BaseControllers{
        
        function index(){
            // 测试assign方法，给一个变量赋值
            $this->assign('name','曹亚存');
            $this->assign('title','This is a test');
            //  数组
            $this->assign(['aaa','bbb','ccc']);

            $this->display('admin/index/index');

        }
        
    }