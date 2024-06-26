<?php
    class Conexao{
        private static $dbNome = 'academia';
        private static $dbHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';

        private static $cont = null;

        public static function conectar(){
            if (self::$cont == null){
                try{
                    self::$cont = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbNome, self::$dbUsuario, self::$dbSenha);
                }
                catch (\PDOException $exception){
                    die ($exception->getMessage());
                }
            }
            return self::$cont;
        }

        public static function desconectar(){
            self::$cont = null;
        }


    }
?>