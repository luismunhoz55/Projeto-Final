<?php 
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $funcEntity = new Entity();
    $data = $_POST;

    if(isset($data) && !empty($data)){
        //chamar o metodo de insert do banco
        $funcEntity->insert("funcionario",$data);

        header("Location: ../../view/funcionario/listagem.php");
    }
?>