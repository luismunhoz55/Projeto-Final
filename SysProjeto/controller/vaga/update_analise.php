<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $requisicao = new Entity();

    $update = $_POST;
    $id = $_POST['id']; //pegando o id 

    if(isset($id) && !empty($id))
    {
        //chamar o método de insert do banco
        $requisicao->update("requisicao",$update,$id);
        header("Location: ../../view/vaga/req-update.php");
    }

?>

