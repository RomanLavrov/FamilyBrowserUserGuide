<?php
class Route{
    public static function start(){
        $controller_lang = 'de';
        $controller_name = 'Overview';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($routes[2])){
            $controller_lang = $routes[2];
        }
       
        if (!empty($routes[3])){
            $controller_name = $routes[3];
        }

        if (!empty($routes[4])){
            $action_name = $routes[4];
        }        

        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "application/controllers/". $controller_lang ."/". $controller_file;

        if (file_exists($controller_path)) {
            include "application/controllers/". $controller_lang ."/". $controller_file;

            $controller = new $controller_name;       
            $action = $action_name;
    
            if (method_exists($controller, $action)) {
                $controller->$action();
            }
            else{
                Route::ErrorPage404();
            }
        }
        else{                        
            Route::ErrorPage404();
        }       
    }

    public function ErrorPage404(){

        $controller_404 = "Controller_404";
        $action = "action_index";
        include "application/controllers/en/controller_404.php";
        if (method_exists($controller_404, $action)){
            $controller = new $controller_404;
            $controller->$action();
        }     
           
        /*$host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');*/  
    }
}
?>