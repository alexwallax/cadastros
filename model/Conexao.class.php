<?php

    //class responsavel por iniciar a conexão com o DB
    class Conexao {

        public static $instance;

        public static function get_instance() {
            //se não existir a variavel $instance, "criar"
            if(!isset(self::$instance)){
                self::$instance = new PDO("mysql:host=localhost;dbname=agendamentos;", "root", "", 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ));//para add utf8 la no DB
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$instance;

        }

    }


?>