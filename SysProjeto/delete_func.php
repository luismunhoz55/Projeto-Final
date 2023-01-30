<?php 
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $funcEntity = new Entity();
    $id = $_POST['id']; // pegando o id

    if(isset($id) && !empty($id)){
        //chamar o metodo de insert do banco
        $funcEntity->delete("funcionario",$id);

        header("Location: ../../view/funcionario/listagem.php");
    }
?>