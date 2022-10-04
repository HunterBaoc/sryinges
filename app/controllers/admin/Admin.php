<?php
    // 包名
    namespace admin;
    
    // 继承controllers包名下的BaseControllers类
    use controllers\BaseControllers;

    class Admin extends BaseControllers{

        public function __construct(){
            $loader = new \Twig\Loader\FilesystemLoader(TMPDIR.'/app/views/admin');
            $this->twig = new \Twig\Environment($loader, [
                //'cache' => '/path/to/compilation_cache',
            ]);
        }   
    }