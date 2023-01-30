<?php   
   include_once '../../model/Conexao.class.php';
   include_once '../../model/Entity.class.php';
   include_once 'header.php';

   $matricula = new Entity();
?>

<div class="container mt-5" stylesheet>
  <!-- vagas -->
  <div class="row">  
    <?php foreach($matricula -> listMatricula("matricula") as $matricula) { 
        $codigo = $matricula['numero'];
    ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-header">
                    <h5 style="color: black;"><strong><?php echo $matricula['nome'] ?></strong></h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <strong>Código da matéria:</strong> <?php echo $matricula['numero'] ?>          
                  </p>   
                </div>
              </div>
            </div>   
        <?php } ?>          
  </div>
 <br> 
  <!-- container -->
</div>

<div style="height: auto; width: 100px; margin: 0 auto; margin-top: 25px; margin-bottom: 25px;">
<a style="height: 50px; width: 100px; margin: 0 auto; padding-top: 12px; text-align:center;" href="../../index.php" class="btn btn-outline-danger espaco">Voltar</a>    
</div>