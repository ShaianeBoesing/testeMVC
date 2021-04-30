<?php

Class Controller{
    
    public $dados;
    
    public function __construct()
    {
        $this->dados = array();
    }
    
    public function loadTemplate($viewName, $modelData = array())
    {
        $this->dados = $modelData;
        require 'Views/template.php';
    }
    
    public function loadViewOnTemplate($viewName, $modelData = array())
    {
        extract($modelData);
        require 'Views/'.$viewName.'.php';
    }
}



?>
