<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do usuario</label>
    <div class="input-group">
      <div class="input-group-text">Email</div>
      <input type="text" name="emailUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="E-mail do usuario">
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Fone</th>
    </tr>
  </thead>
  <tbody>
  <?php
$emailusu = isset ($_POST["emailUsu"])? $_POST["emailUsu"]:"" ;

if($emailusu){


$dado = visuUsuarioEmail($conn, $emailusu);

foreach($dado as $emailUsuarios): 
?>
    <tr>
      <th scope="row"><?=$emailUsuarios["idusu"] ?></th>
      <td><?=$emailUsuarios["nomeusu"] ?></td>
      <td><?=$emailUsuarios["emailusu"] ?></td>
      <td><?=$emailUsuarios["foneusu"] ?></td>
    </tr>
    <?php
      endforeach;
    }
    ?>
  </tbody>
</table>

</div>

<?php

include_once("../view/footer.php")

?>