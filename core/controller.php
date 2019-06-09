<?php

class controller{
    //Carrega apenas o view
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
    //Carrega o template e envia o nome da view, serve para chamar uma view ja com o template
    public function loadTemplate($viewName, $viewData = array()){
        require 'views/template.php';
    }
    //Funcao que eh usada dentro do template para carregar a view
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}
