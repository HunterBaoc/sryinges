<?php
    // 包名
    namespace admin;
    
    // 继承controllers包名下的BaseControllers类
    use controllers\BaseControllers;

    class Admin extends BaseControllers{
        function index(){
            
            $this->success('/home', '成功');
        }

        function add(){
            echo "This is admin.admin.php@add";
        }
    }