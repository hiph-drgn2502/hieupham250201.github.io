<?php
    class App{

        function __construct(){///
            $this->autoload();
            $reqs=$this->reqToArray();

            //Xac dinh ten controller $reqs[0] -product
            if(isset($reqs[0]) && (file_exists(PATH_TO_CONTROLLER.strtolower($reqs[0]).'.php')||file_exists(PATH_TO_ADMINCONTROLLER.strtolower($reqs[0]).'.php'))){
            
                $controllername = $reqs[0];
                unset($reqs[0]);
            }else{
                $controllername = 'Product';
            }

            //Tao controller
            $controller = new $controllername;

            //Xac dinh ten method $reqs[1] -home
            if(isset($reqs[1]) && method_exists($controller,$reqs[1])){
                $methodname = $reqs[1];
                unset($reqs[1]);
            }else{
                $methodname = 'home';
            }

            //Xac dinh mang cac tham so [] -mang rong
            if(empty($reqs))
                $reqs=[];

            //Goi controller thuc thi method, truyen tham so
            call_user_func_array([$controller,$methodname],$reqs);
        }

        private function reqToArray(){
            if(isset($_GET['req'])) return explode('/',$_GET['req']);
            else return null;
        }

        private function autoload(){
            $loadClass = function($classname){
                $filename = PATH_TO_CONTROLLER.strtolower($classname).'.php';
                if(file_exists($filename)){
                    include_once($filename);
                }

                $filename = PATH_TO_CORE.strtolower($classname).'.php';
                if(file_exists($filename)){
                    include_once($filename);
                }

                $filename = PATH_TO_MODEL.strtolower($classname).'.php';
                if(file_exists($filename)){
                    include_once($filename);
                }

                $filename = PATH_TO_ADMINMODEL.strtolower($classname).'.php';
                if(file_exists($filename)){
                    include_once($filename);
                }

                $filename = PATH_TO_LIB.strtolower($classname).'.php';
                if(file_exists($filename)){
                    include_once($filename);
                }

                $filename = PATH_TO_ADMINCONTROLLER.strtolower($classname).'.php';
                if(file_exists($filename)){
                    include_once($filename);
                }
            };
            spl_autoload_register($loadClass);
        }
    }
?>