<?php

    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $data = $_POST; //array $data vai ser tudo que vier do POST

    if(isset($data) && !empty($data)) { 
        $manager->insertClient("registros", $data); //executa a inserção do cliente usa como parametros a tabela do banco "registros" e o array $data
        header("Location: ../index.php?client_add_success");
    }


?>