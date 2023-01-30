<?php
    include_once "./model/Conexao.class.php";
    include_once "./model/Entity.class.php";
    include_once "./view/includes/header.php";

    $vagaEntity = new Entity();
?>

<div class="container mt-5">
  <!-- vagas -->
  <div class="row">  

 
 <div class="menu-adm">
  
    <a href="view/vaga/page_register.php" class="btn-hover color-8 but">
      Cadastro para alunos 
    </a>
    <a href="view/vaga/req-update.php" class="btn-hover color-8 but">
      Modo Adm
    </a>
    <a href="view/vaga/pag-req.php" class="btn-hover color-8 but">
      Área do aluno
    </a>
    <a href="view/vaga/pag-matricula.php" class="btn-hover color-8 but">
      Ver matérias
    </a>
    
 </div>

  </div>
 <br> 
  <!-- container -->
</div>

