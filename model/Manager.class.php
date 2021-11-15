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

        //delentando clientes
        public function deleteClient($table, $id) {
            $pdo = parent::get_instance();
            $sql = "DELETE FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function getInfo($table, $id) {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function updateClient($table, $data, $id) {
            $pdo = parent::get_instance();
            $new_values = "";//variavel responsavel para levar os novos valores ao banco
            foreach($data as $key => $value) {
                $new_values .= "$key=:$key, ";
            }
            $new_values = substr($new_values, 0, -2);
            $sql = "UPDATE $table SET $new_values WHERE id = :id";
            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value) {
                $statement->bindValue(":$key", $value, PDO::PARAM_STR);
            }
            $statement->execute();
        }


    }





?>