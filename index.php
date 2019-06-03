<?php
//nessa minha estrutura é onde vou redirecionar para o controllers;
//var_dump($_GET);

$controller = key($_GET);
$controller.= "Controller.php";
require_once "controller/$controller.php";

$obj = new $controler();
//aqui pego o método de envio e retorno ele como parâmetro da minha função view
$obj->view($_SERVER('RESQUEST_METHOD'));
var_dump($controller);
?>