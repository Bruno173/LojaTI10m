<?php
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");
include_once("../view/header.php");


extract($_REQUEST, EXTR_OVERWRITE);

if(deletarJogo($conn,$codigojogo)){
    echo("Jogo excluido com sucesso");
}else{
    echo("Jogo não excluido");
}

include_once("../view/footer.php")

?>