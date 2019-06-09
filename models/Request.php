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

    public function checkLatestContestCron(){
        $apiUrl = 'http://confiraloterias.com.br/api0/json.php?loteria=lotofacil&token='.API_TOKEN;
        $returnRawDataApi = file_get_contents($apiUrl);
        $returnApi = json_decode($returnRawDataApi);
        $currentContest = $returnApi->concurso;
        $sql = $this->db->query("SELECT * FROM dados_concurso WHERE numero = 1824");
        if($sql->rowCount() > 0){
            echo "O banco de dados da API esta atualizado!<br> Ultimo registro: ".$currentContest->numero;

        }else{
            $newContest = $this->db->prepare('
            INSERT INTO dados_concurso SET
            data = :data,
            numero = :numero,
            dezenas = :dezenas,
            acertos_15 = :acertos_15,
            acertos_14 = :acertos_14,
            acertos_13 = :acertos_13,
            acertos_12 = :acertos_12,
            acertos_11 = :acertos_11
            ');
            $newContest->bindValue(':data',$currentContest->data);
            $newContest->bindValue(':numero',$currentContest->numero);
            $newContest->bindValue(':dezenas',implode(',',$currentContest->dezenas));
            $newContest->bindValue(':acertos_15',$currentContest->premiacao->acertos_15->valor_pago);
            $newContest->bindValue(':acertos_14',$currentContest->premiacao->acertos_14->valor_pago);
            $newContest->bindValue(':acertos_13',$currentContest->premiacao->acertos_13->valor_pago);
            $newContest->bindValue(':acertos_12',$currentContest->premiacao->acertos_12->valor_pago);
            $newContest->bindValue(':acertos_11',$currentContest->premiacao->acertos_11->valor_pago);
        
            $newContest->execute();

            echo "Inserido novo registro: ".$currentContest->numero;
        }
    }
}

?>