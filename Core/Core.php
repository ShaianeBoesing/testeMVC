<?php

Class Core {
    
    //construtor
    public function __construct()
    {
        $this->run();
    }
    
    public function run()
    {
        $parameters = array();
        
        if(isset($_GET['pag']))
        {
            $url = $_GET['pag'];
        }
        
        //there is information after domain (ex: www.site.com/classe/funcao/parameters)
        if(!empty($url))
        {
            $url = explode('/', $url);
            $controller = $url[0].'Controller'; //noticiaController
            array_shift($url); // array_shift - removes the first element of an array
            
            if(isset($url[0]) || !empty($url[0]))
            {
                $method = $url[0];
                array_shift($url); 
            }else
            {
                $method = 'index';
            }
            
            if (count($url) > 0)
            {
                $parameters = $url;
            }
        } else // if there isn't information after domain (ex: www.site.com/)
        { 
            $controller =   'homeController';
            $method = 'index';
        }
        
        $path = 'tela_login_mvc/Controllers/'.$controller.'.php';
        
        if(!file_exists($path) &&  !method_exists($controller, $method))
        {
            $controller =   'notFound';
            $method = 'error404';
        }
        
        $c = new $controller;
        call_user_func_array(array($c,$method), $parameters);
        
        
        
        
    }
}

?>
