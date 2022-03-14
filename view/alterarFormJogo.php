<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");

extract($_REQUEST, EXTR_OVERWRITE);

$informa = visuJogoCodigo($conn, $idjogo);

?>

<div class="container">

    <form class="row g-3" action="../controler/alterarJogo.php" method="post">
        <input type="hidden" name="idjogo" value="<?= $informa["idjogo"] ?>">
        <div class="col-md-6">
            <label for="inputJogo" class="form-label">Nome do Jogo</label>
            <input type="text" name="nomejogo" value="<?= $informa["nomejogo"] ?>" class="form-control" id="inputJogo" placeholder="XXXXXXXXXX" required>
        </div>
        <div class="col-md-6">
            <label for="inputValor" class="form-label">Valor do jogo</label>
            <input type="text" name="valorjogo" value="<?= $informa["valorjogo"] ?>" class="form-control" id="inputValor" placeholder="XX,XX" required>
        </div>
        <div class="col-md-6">
            <label for="inputGenero" class="form-label">Tipo de jogo</label>
            <select id="inputGenero" name="generojogo" value="<?= $informa["generojogo"] ?>" class="form-select">
                <?php
                switch ($informa["generojogo"]) {
                    case "RPG":
                        echo "i é igual a 0";
                        break;
                    case "Aventura":
                        echo "i é igual a 1";
                        break;
                    case "Puzzle":
                        echo "i é igual a 2";
                        break;
                    case "FPS":
                        echo "i é igual a 2";
                        break;
                    case "Corrida":
                        echo "i é igual a 2";
                        break;
                }
                ?>
                <option value="RPG">RPG</option>
                <option value="Aventura">Aventura</option>
                <option value="Puzzle">Puzzle</option>
                <option value="FPS">FPS</option>
                <option value="Corrida">Corrida</option>
            </select>

        </div>
        <div class="col-6">
            <label for="inputQuantidade" class="form-label">Quantidade de Jogos</label>
            <input type="number" name="qtdjogo" value="<?= $informa["qtdjogo"] ?>" class="form-control" id="inpuQuantidade" placeholder="XXX" required>
        </div>
        <div class="col-md-4">
            <label for="inputdata" class="form-label">Data De Lançamento</label>
            <input type="date" name="datalancamentojogo" value="<?= $informa["datalancamentojogo"] ?>" class="form-control" id="inputdata" placeholder="XX/XX/XXXX" required>
        </div>
        <div class="col-4">
            <label for="inputstudio" class="form-label">Studio</label>
            <input type="text" name="studiojogo" value="<?= $informa["studiojogo"] ?>" class="form-control" id="inputstudio" placeholder="XXXXXXXXX" required>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Aceita-se os termo de uso do sistema de jogos
                </label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>

</div>

</div>

<?php
include_once("footer.php");
?>