<?php
    namespace controllers;

    class BaseControllers {

        protected $twig;
        protected $data = [];
        /**
         * 
         */

        public function __construct(){
            $loader = new \Twig\Loader\FilesystemLoader('/data/www/default/sryinges/app/views');
            $this->twig = new \Twig\Environment($loader, [
                //'cache' => '/path/to/compilation_cache',
            ]);
        }

        protected function assign($var, $value=null){
            // 如果$var是数组，则把$var中的内容追加到data中
            if(is_array($var)){
                $this->data = array_merge($this->data, $var);
            // 如果$var不是数组，则把$value值赋给data中
            }else{
                $this->data[$var] = $value;
            }
        }

        protected function display($template){
            echo $this->twig->render($template.'.html', $this->data);
        }



        protected function success($url, $mess){
            echo "<script>";
            echo "alert('{$mess}');";

            if(!empty($url)){
                echo "location.href='{$url}';";
            }
            
            echo "</script>";
        }
    }