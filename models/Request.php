<?php 
class Request extends model{
    public function getContestData($contest_number){

        $apiUrl = 'http://confiraloterias.com.br/api0/json.php?loteria=lotofacil&token='.API_TOKEN.'&concurso='.$contest_number;
        $returnRawDataApi = file_get_contents($apiUrl);
        $returnApi = json_decode($returnRawDataApi);

        if(!empty($returnApi->erro)){
            echo $returnApi->erro;
            exit;
        }

        $currentContest = $returnApi->concurso;
        return $currentContest;
    }
}

?>