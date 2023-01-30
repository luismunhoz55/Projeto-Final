<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $analise = new Entity();
    $data = $_POST;

    if(isset($data) && !empty($data))
    {
        //chamar o método de insert do banco
        $analise->insert("requisicao",$data);
        header("Location: ../../index.php");
    }

?>