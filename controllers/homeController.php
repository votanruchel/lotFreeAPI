<?php
class homeController extends controller{
    public function index(){
        $this->loadTemplate('home',$dados = array());
    }

    public function teste(){
        echo "this is test";
    }
}
