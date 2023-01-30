<?php   
   include_once '../../model/Conexao.class.php';
   include_once '../../model/Entity.class.php';
   include_once 'header.php';

   $aluno = new Entity();
   $requisicao = new Entity();
   $disciplina = new Entity();

   $id = $_POST['id'];

  //  echo $id;
?>
  <div class="mario1">

<form action="../../controller/vaga/update_analise.php" method="POST">
<?php foreach($requisicao -> getInfo("requisicao", $id) as $req){ 
   foreach($aluno -> listById("aluno", $id) as $aluno){ 
    $req['id'] = $id;
  ?>

<input type="hidden" name="id_aluno" id="id_aluno" value="<?=$req['id'] ?>">
<input type="hidden" name="id" id="id" value="<?=$req['id'] ?>">
<input type="hidden" name="disciplina" id="disciplina" value="<?=$req['disciplina'] ?>">
<input type="hidden" name="tipoSolicitacao" id="tipoSolicitacao" value="<?=$req['tipoSolicitacao'] ?>">
<input type="hidden" name="curso" id="curso" value="<?=$req['curso'] ?>">

            <div>
              <div class="form-group">
                  <strong>Nome:</strong>
                  <?php echo $aluno['nome']; ?>
                  <br>
                  <p>
                    <strong>Matéria: </strong>
                    <?php
                      foreach($disciplina -> listMatricula("matricula") as $dis){
                        if($dis['numero'] == $req['disciplina']){
                          echo $dis['nome'];
                        }
                      }
                    ?>
                  </p>
                  <p>
                    <strong>Requisição:</strong> 
                    <?php 
                      if($req['tipoSolicitacao'] == 1){
                        echo "Incluir";
                      }else if($req['tipoSolicitacao'] == 2){
                        echo "Excluir";
                      }else{
                        echo "Quebra de pré-requisito";
                      } 
                    ?>
                  </p>
              </div>
            </div>
            <div class="form-group">
              <!-- Matéria: <?php echo $dis; ?> -->
            </div>
            <div class="form-group">
                <strong>Resposta: </strong>
                <div class="radio-item">
                    <input type="radio" name="aprovacao" value="s" checked id="deferido">
                    <label for="deferido">Deferido</label>
                </div>
                <div class="radio-item">
                    <input type="radio" name="aprovacao" value="n" id="indeferido">
                    <label for="indeferido">Indeferido</label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-outline-danger btn-lg">Enviar</button>
            </div>
        </div>
</form>

<?php 
      }
      // }
    }     
   
?> 