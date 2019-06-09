<?php
class homeController extends controller{
    public function index(){
        $render = new Render();
        $api = new Request();
        $dados = array();
        $dados['lastcontest'] = $render->getLastContest();

        $this->loadTemplate('home',$dados);

    }
}
