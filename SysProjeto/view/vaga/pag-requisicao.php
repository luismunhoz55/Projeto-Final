<?php   
   include_once '../../model/Conexao.class.php';
   include_once '../../model/Entity.class.php';
   include_once 'header.php';

   $requisicao = new Entity();
   
?>
<?php  if(!isset($_POST['matricula'])) {?>
<form action="pag-requisicao.php" method="POST">
    <div class="container">
        <div class="form">
      
            <div class="form-group">
                <strong>Matrícula:</strong>
                <input type="text" class="form-control" name="matricula" placeholder="Ex: 000000" required id="matricula">
                <br>
            </div>           
            <div class="form-group d-flex align-items-center justify-content-center">
                <button class="btn btn-outline-danger btn-lg">Continuar</button>
                <!-- <?php $dataPedido = date("d-m-Y");?>	 -->
            </div>
        </div>
    </div>
</form>
<?php 
}
else{
    ?>
        
        <form action="../../controller/vaga/insert_requisicao.php" method="POST">
                <div class="container">
                    <div class="form">

                    <?php 
                         foreach($requisicao -> getByMatricula($_POST['matricula']) as $aluno) {                               
                    ?>
                        <input type="hidden" name="id_aluno" value="<?php echo $aluno['idAluno'] ?>" id="id_aluno">
                    
                    <?php } ?>

                        <div class="form-group">
                            <strong>Curso:</strong>
                            <br><div class="radio-item">
                                <input type="radio" name="curso" value="ECA" checked id="cursoECA">
                                <label for="cursoECA">Engenharia de Controle e Automação</label>
                            </div><br>  
                            <div class="radio-item">
                                <input type="radio" name="curso" value="ECO" id="cursoECO">
                                <label for="cursoECO">Engenharia da computação</label>
                            </div>
                        </div>
                        <div class="">              
                            <strong>Código da disciplina:</strong>
                            <input type="text" style="width: 20%;" class="form-control" name="disciplina" placeholder="Ex: 000000" required id="disciplina">
                            <br>
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            <br><div class="radio-item">
                                <input type="radio" name="tipoSolicitacao" value="1" checked id="tipoSolicitacao1">
                                <label for="tipoSolicitacao1">Incluir</label>
                            </div><br>  
                            <div class="radio-item">
                                <input type="radio" name="tipoSolicitacao" value="2" id="tipoSolicitacao2">
                                <label for="tipoSolicitacao2">Excluir</label>
                            </div><br> 
                            <div class="radio-item">
                                <input type="radio" name="tipoSolicitacao" value="3" id="tipoSolicitacao3">
                                <label for="tipoSolicitacao3">Quebra de pré-Requisito</label>
                                <input type="hidden" name="aprovacao" id="aprovacao" value="t">
                            </div>
                        </div>
                        <div class="form-group">

                            <button class="btn btn-outline-danger btn-lg">Inserir</button>
                            <!-- <?php $dataPedido = date("d-m-Y");?>	 -->
                        </div>
                    </div>
                </div>
            </form>
        

<?php } ?>

<div style="height: auto; width: 100px; margin: 0 auto; margin-top: 25px; margin-bottom: 25px;">
<a style="height: 50px; width: 100px; margin: 0 auto; padding-top: 12px; text-align:center;" href="../../index.php" class="btn btn-outline-danger espaco">Voltar</a>    
</div>

<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
            $("#matricula").mask("00000000");
            $("#disciplina").mask("00000");
    });
</script>