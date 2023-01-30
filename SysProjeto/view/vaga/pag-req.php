<?php
include_once '../../model/Conexao.class.php';
include_once '../../model/Entity.class.php';
include_once 'header.php';

$aluno = new Entity();
$requisicao = new Entity();
$disciplina = new Entity(); 

$matriculaId = 0;

?>

<div style="width: 980px; height: auto; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
  <form action="pag-req.php" method="POST">
    <label for=""><strong>Insira sua matrícula:</strong></label>
    <input type="text" class="form-control-1" placeholder="Ex: 00000000" name="matriculaId">
    <input type="submit" value="pesquisar" class="botao-matricula" name="" id="">
  </form>
</div>

<?php

if (isset($_POST["matriculaId"])) {
  $matriculaId = $_POST["matriculaId"];
  foreach ($aluno->listByMatricula($matriculaId) as $aluno) { ?>

    <div style="width: 980px; height: auto; margin: 0 auto;" class="">

      <div class="mario d-flex justify-content-space-around" style="">
        <div>
          <label for=""><strong>Nome: </strong></label>
          <?php echo $aluno['nome']; ?><br>

          <label for=""><strong>Curso: </strong></label>
          <?php if ($aluno['curso'] == 'ECO') {
            echo $aluno['curso'];
            echo "<br>";
          } else {
            echo $aluno['curso'];
            echo "<br>";
          } ?>

          <label for=""><strong>Matrícula: </strong></label>
          <?php echo $aluno['matricula'];
          echo "<br>"; ?>

          <label for=""><strong>Ano: </strong></label>
          <?php echo $aluno['ano'];
          echo "<br>"; ?>

          <label for=""><strong>Semestre: </strong></label>
          <?php echo $aluno['semestre'];
          echo "<br>"; ?>

          <label for=""><strong>Matéria:</strong></label>
            <?php
              foreach($requisicao -> listRequisicao("requisicao") as $req){
                if($req['id_aluno'] == $aluno['idAluno']){
                  foreach($disciplina -> listMatricula("matricula") as $dis){
                    if($dis['numero'] == $req['disciplina']){
                      echo $dis['nome']."<br>";
                    }
                  }
                }
              }
            ?>

          <label for=""><strong>Requisição:</strong></label>
            <?php 
              foreach($requisicao -> listRequisicao("requisicao") as $req){
                if($req['id_aluno'] == $aluno['idAluno']){
                  if($req['tipoSolicitacao'] == 1){
                    echo "Incluir<br>";
                  }else if($req['tipoSolicitacao'] == 2){
                    echo "Excluir<br>";
                  }else{
                    echo "Quebra de pré-requisito<br>";
                  };
                }
              }
            ?>

          <Label><strong>Situação:</strong></Label>

          <?php

              foreach($requisicao -> listRequisicao("requisicao") as $req){
                if($req['id_aluno'] == $aluno['idAluno']){
                  if($req['aprovacao'] == 's'){
                    echo "Deferido";
                  }else if($req['aprovacao'] == 'n'){
                    echo "Indeferido";
                  }else{
                    echo "Ainda não analisado";
                  };
                }
              }      
          ?>
            </div>
          <div>
        </div>
      </div>
  <?php
  }   
}   

?>

<div class="d-flex align-items-center justify-content-center">
  <img src='../../assets/img/waiting-on.gif' style='height: 250px;' alt='gif-esperando'>
</div>

<div style="height: auto; width: 100px; margin: 0 auto; margin-top: 25px; margin-bottom: 25px;">
<a style="height: 50px; width: 100px; margin: 0 auto; padding-top: 12px; text-align:center;" href="../../index.php" class="btn btn-outline-danger espaco">Voltar</a>    
</div>

<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
            $("#matriculaId").mask("00000000");
    });
</script>



























































  <!-- <div  style="width: 980px; height: auto; margin: 0 auto;" class="">
    
            <div class="mario" style="">
              <div>
                <label for=""><strong>Nome: </strong></label>
                <?php echo $aluno['nome']; ?><br>

                <label for=""><strong>Curso: </strong></label>
                <?php if ($aluno['curso'] == 'ECO') {
                  echo $aluno['curso'];
                  echo "<br>";
                } else {
                  echo $aluno['curso'];
                  echo "<br>";
                } ?>

                <label for=""><strong>Matrícula: </strong></label>
                <?php echo $aluno['matricula'];
                echo "<br>"; ?>

                <label for=""><strong>Ano: </strong></label>
                <?php echo $aluno['ano'];
                echo "<br>"; ?>

                <label for=""><strong>Semestre: </strong></label>
                <?php echo $aluno['semestre'];
                echo "<br>"; ?>

                <Label>Aprovado: </Label>
                
                <?php

                foreach ($requisicao->listById("requisicao", $aluno['id']) as $requisicao) {

                  echo $requisicao['aprovacao'];
                  echo "<br>";
                }
                ?>

              </div>
              <div>
              </div>
     
  </div> -->
  <?php




  ?>