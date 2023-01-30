<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $vagaEntity = new Entity();
    $data = $_POST;
    // $dataPedido = date("Y-m-d");

    if(isset($data) && !empty($data))
    {
        //chamar o método de insert do banco
        $vagaEntity->insert("aluno",$data);
        header("Location: ../../view/vaga/pag-requisicao.php");
    }

?>