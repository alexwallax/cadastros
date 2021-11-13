<?php

    class Manager extends Conexao {

        //inserindo clientes
        public function insertClient($table, $data) {
            //iniciar a conexão com o DB
            $pdo = parent::get_instance();//iniciar conexão com banco
            $fields = implode(", ", array_keys($data)); //campos
            $values = ":".implode(", :", array_keys($data)); //valores
            $sql = "INSERT INTO $table ($fields) VALUES ($values)"; //query
            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value) {
                $statement->bindValue(":$key", $value, PDO::PARAM_STR);
            }
            $statement->execute();
        }

        //listando clientes
        public function listClient($table) {
            $pdo = parent::get_instance();//iniciar conexão com banco
            $sql = "SELECT * FROM $table ORDER BY name ASC"; //query
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }



    }





?>