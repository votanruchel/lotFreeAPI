<?php

class Core{
    public function run(){

        //verifica se o usuario enviou parametro na URL
        //Define que a URL por padrao tera uma /
        $url = '/';
        //Verifica se o usuario enviou alguma URL, se sim concatena a $url acima com oque foi enviado e salva na variavel $url
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        //Cria um array de parametros
        $params = array();
        //Verifica se a variavel $url esta vazia
        if(!empty($url) && $url != '/'){
            //Da um explode na / para dividir os parametros passados na url
            $url = explode('/',$url);
            //Remove o primeiro item do Array (array_shift()) pois o primeiro valor eh nulo
            array_shift($url);
            //Concatena o parametro passado com 'Controller'
            $currentController = $url[0].'Controller';
            //Remove o primeiro parametro no array em busca de uma action
            array_shift($url);
            //Faz a verificacao para ver se ainda contem algum item no array em busca de uma action
            if(isset($url[0]) && !empty($url[0])){
              // Se ainda existir um item adiciona na variavel $currentAction
                $currentAction = $url[0];
                //Remove o primeiro item do array
                array_shift($url);
            }else{
                //Se nao ouver action adiciona um valor padrao (index)
                $currentAction = 'index';
            }
            //Verifica se ouve parametros passados
            if(count($url) > 0){
                //se ouve transfere os valores de $url para $params
                $params = $url;
            }

        }else{
            //Caso contrario adicona ao $currentController o valor de (homeController) como padrao e ao $currentAction (index) como padrao
            $currentController = 'homeController';
            $currentAction = 'index';
        }
            //Verifica se o controller passado na URL realmente existe e tambem se o metodo passado existe
            if (!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
              //caso nao existe retorna o usuario para o controller notfoundController e imprime uma mensagem de pagina nao encontrada
              $currentController = 'notfoundController';
              $currentAction = 'index';
            }
            //cria um objeto para o controller
            $c = new $currentController();
            //  \/ PESQUISAR A FUNCIONALIDADE
            call_user_func_array(array($c,$currentAction), $params);


            /*
        echo "controller: ".$currentController."<hr>";
        echo "action: ".$currentAction."<hr>";
        echo "params: ".print_r($params, true)."<hr>";

        */
    }
}
