<?php 

function inserirJogos($conn,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo) {



$query = "INSERT INTO `tbjogos` (`idjogo`, `nomejogo`, `valorjogo`, `generojogo`, `qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES (NULL,'{$nomejogo}','{$valorjogo}','{$generojogo}','{$qtdjogo}','{$datalancamentojogo}','{$studiojogo}')";


$dados = mysqli_query($conn,$query);
return $dados; 

};

function visuJogoNome($conn,$nomejogo){
    $query = "select * from tbjogos where nomejogo like '%{$nomejogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
     
};

function visuJogoGenero($conn, $generojogo){
    $query = "select * from tbjogos where generojogo like '%{$generojogo}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

function visuJogoCodigo($conn, $codigojogo){
    $query = "select * from tbjogos where idjogo = '{$codigojogo}'";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
};

function alterarJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo){
    $query = "update tbjogos set nomejogo='{$nomejogo}', valorjogo='{$valorjogo}', generojogo='{$generojogo}', qtdjogo='{$qtdjogo}', datalancamentojogo='{$datalancamentojogo}', studiojogo='{$studiojogo}' where idjogo = '{$codigojogo}'";

    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

function deletarJogo($conn, $codigojogo){
    $query = "delete from tbjogos where idjogo='{$codigojogo}'";
    $resultado = mysqli_query($conn,$query);
    return $resultado;
};
