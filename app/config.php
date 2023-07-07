<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexão estabelecida com sucesso";
} catch (PDOException $e) {
    //print_r($e);
    echo "Error ao conectar a base dados" . $e->getMessage();
}

$URL = 'http://localhost/www.sistemadeventa.com';

date_default_timezone_set("America/Sao_Paulo");
$fechaHora = date('Y-m-d H:i:s');


