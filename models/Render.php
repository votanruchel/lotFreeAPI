<?php
class Render extends model{
    public function getLastContest(){
        $sql = $this->db->query("SELECT * FROM dados_concurso ORDER BY numero DESC LIMIT 1");
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql;
        }
        
    }
}