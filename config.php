<?php
require 'environment.php';

$config = array();
//Definicao do token da API
define('API_TOKEN','IiTM2dpnB9mmm5T');
//ht2wcdZ9HsBBWuA   --- Token Alessandro
//IiTM2dpnB9mmm5T   --- Token Claudio

if(ENVIRONMENT == "development"){
    define("BASE_URL", "http://localhost/lotFreeAPI/");
    $config['dbname'] = 'lotapi';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "https://votan.dev/mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
