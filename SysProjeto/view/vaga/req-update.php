<?php   
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';
    include_once 'header.php';
 
    $reqEntity = new Entity();
    $aluno = new Entity();
    
?>

<div class="container mt-5">

  <div class="row">  
  <?php foreach($reqEntity -> listRequisicao("requisicao") as $req){
     if($req['aprovacao'] == 't'){
      
        foreach($reqEntity -> list("aluno") as $aluno){
              if($req['id_aluno'] == $aluno['idAluno']){ ?>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <p class="card-text">
                    <strong>Nome: </strong>
                    <?php echo $aluno['nome']; ?>  
                    <br>
                    <strong>Matrícula: </strong> 
                    <?php echo $aluno['matricula']; ?>           
                  </p>        
                </div>
                <div class="card-footer direita">

                    <form action="./pag-adm2.php" method="POST">
                      <input type="hidden" name="id" id="id" value="<?=$aluno['idAluno'] ?>">
                      <button class="btn btn-outline-danger espaco">
                        Alterar
                      </button>
                    </form>
                  </div>
              </div>
            </div>   
              <?php 
            }
          }           
      }
  }

  ?>
                
 <br> 
  <!-- container -->
</div>

<div style="height: auto; width: 100px; margin: 0 auto; margin-top: 25px;">
<a style="height: 50px; width: 100px; margin: 0 auto; padding-top: 12px; text-align:center;" href="../../index.php" class="btn btn-outline-danger espaco">Voltar</a>    
</div>




    