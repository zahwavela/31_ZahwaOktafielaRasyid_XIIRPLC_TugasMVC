<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        //setup controller
        if(file_exists('../app/controller/'. $url
        [0].'.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controller/'.
        $this->controller.'.php';
        $this->controller = new
        $this->controller;

        //setup method
        if(isset($url[1]))
        {
            if(method_exists($this->controller,
            $url[1])) {
                $this->method= $url[1];
                unset($url[1]);
            }
        }
        //setup Params/Data
        if(!empty($url)) {
            $this->params = array_values($url);
        }
        //Jalankan controller dan method, serta kirimkan data
        call_user_func_array(
            [$this->controller, $this->method],
            $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            // $url = $_GET['url'];
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        else {
            $url[0] = $this->controller;
            return $url;
        }
    }
}

?>
