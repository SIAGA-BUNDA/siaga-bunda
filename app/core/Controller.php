<?php
class controller{
    public function view($view, $data = []){
        require_once "../app/views/{$view}.php";
    }
    public function model ($model, $data = []){
        require_once "../app/model/{$model}.php";
        return new $model($data);
    }
}