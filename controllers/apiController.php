<?php
class apiController extends controller{
    public function index(){

    }

    public function contest($c_number){
        $api = new Request();
        if($c_number == ''){
            echo 'Parametro de concurso nao encontrado!';
            exit;
        }
        $contestData = $api->getContestData($c_number);
    }
    public function checkUpdate(){
        $api = new Request();
        $api->checkLatestContestCron();
    }

}
