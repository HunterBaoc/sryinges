<?php
    namespace home;

    // 继承controllers包名下的BaseControllers类
    use controllers\BaseControllers;

    class Home extends BaseControllers{
    
        public function __construct(){
            $loader = new \Twig\Loader\FilesystemLoader(TMPDIR.'/app/views/'.TMPNAME);
            $this->twig = new \Twig\Environment($loader, [
                    //'cache' => '/path/to/compilation_cache',
            ]);
        }   
    }