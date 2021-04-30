<?php

Class homeController extends Controller{
    
    public function index()
    {
        //1 - chamar o model (buscar as informações do banco de dados) - passo facultativo
        //2 - chamar uma view
        //3 - fazer a junção de backend e frontend
        
        $this->loadTemplate('home');
    }
    
}

?>