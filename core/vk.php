<?php

namespace core;
include_once CORE.'/autoload.php';
include_once CORE.'/route.php';

class vk{
    public function run(){
        spl_autoload_register('\core\autoload::load');
        $route = new \core\route();

        $dir = $route->dir;
        $ctrl = $route->ctrl;
        $action = $route->action;
        $params = $route->params;
        $http_get_params = $route->http_get_params;
        if($dir == ''){
            $ctrl_file = APP.'/ctrl/'.$ctrl.'_ctrl.php';
            $ctrl_class = '\\app\\ctrl\\'.$ctrl.'_ctrl';
        }else{
            $ctrl_file = APP.'/ctrl/'.$dir.'/'.$ctrl.'_ctrl.php';
            $ctrl_class = '\\app\\ctrl\\'.$dir.'\\'.$ctrl.'_ctrl';
        }
        
        if(is_file($ctrl_file)){
            include $ctrl_file;
            $ctrl_obj = new $ctrl_class;
            $ctrl_obj->$action();
        }else {
            throw new \Exception('找不到控制器'.$ctrl_file);
        }
    }
}