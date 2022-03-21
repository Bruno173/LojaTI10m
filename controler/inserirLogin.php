<?php
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");

$emailusu = $_POST["emailusu"];
$senhausu = $_POST["senhausu"];
$acesso = loginUsuario($conn,$emailusu,$senhausu);

if($acesso === $emailusu){
    header("Location:../view/index.php");
}else{
    //header("Location:../view/login.php");
    var_dump ($acesso);
}





?>