<?php

    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $id = $_POST['id'];

    //condição - se exixtir a variavel $id e não extiver vazia 
    if(isset($id) && !empty($id)) {
        //execute deleteClient ("parametro registro do banco", variavel $id)
        $manager->deleteClient("registros", $id);

        //direcione para index.php
        header("Location: ../index.php?client_deleted");
    }


?>