<?php
    // 包名
    namespace admin;
    
    // 继承controllers包名下的BaseControllers类
    use controllers\BaseControllers;

    class Admin extends BaseControllers{
        
        function index(){
        //     $loader = new \Twig\Loader\FilesystemLoader('/path/to/templates');
        //     $twig = new \Twig\Environment($loader, [
        //         //'cache' => '/path/to/compilation_cache',
        //     ]);

            echo "Test Macaw ";
        }
        
    }