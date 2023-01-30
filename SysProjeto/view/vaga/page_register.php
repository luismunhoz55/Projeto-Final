<?php   
  
   include_once 'header.php';
   
?>

<form action="../../controller/vaga/insert_vaga.php" method="POST">
    <div class="container">
        <div class="form">
            <div class="form-group">
                <strong>Nome completo:</strong>
                <input type="text" class="form-control" name="nome" placeholder="Ex: Bruno Wotroba" required autofocus id="nome">
                <br>
            </div>
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
            <div class="form-group">
                <strong>Matrícula:</strong>
                <input type="text" style="width: 20%;" class="form-control" name="matricula" placeholder="Ex: 00000000" required id="matricula">
                <br>
            </div>
            <div class="">
                <strong>Ano / Semestre de ingresso:</strong> <br>
                <input type="text" class="" name="ano" placeholder="Ex: 2020" style="width: 10%;" required id="ano"> /
                <input type="text" class="" name="semestre" placeholder="Ex: 1" style="width: 10%;" required id="semestre">             
                <br>
                <br>
            </div>
            <div class="form-group">
                <button class="btn btn-outline-danger btn-lg">Criar requisição</button>
                <!-- <?php $dataPedido = date("d-m-Y");?>	 -->
            </div>
        </div>
    </div>
</form>

<div style="height: auto; width: 100px; margin: 0 auto; margin-top: 25px; margin-bottom: 25px;">
<a style="height: 50px; width: 100px; margin: 0 auto; padding-top: 12px; text-align:center;" href="../../index.php" class="btn btn-outline-danger espaco">Voltar</a>    
</div>

<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
            $("#matricula").mask("00000000");
            $("#ano").mask("0000");
            $("#semestre").mask("0");
    });
</script>