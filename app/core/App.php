<?php
class App{
    public $controller = 'Home';
    public $method = 'index';
    public $params = [];
    public function __construct(){
        $url = $this->parseUrl();
        if(!empty($url)){
        if(file_exists('../app/controller/'. $url[0]. '.php' )){
            $this->controller = $url[0];
            unset($url[0]);
        }}

        //controller
        require_once '../app/controller/'. $this->controller. '.php';
        $this->controller = new $this->controller;

        //method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        if(!empty($url)){
            $this->params = array_values($url);
            
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return !empty($url[0]) ? $url : [];
        }
        return [];
    }
}
