<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
try{

}catch(PDOException $e){
    echo $e->getMessage();
}