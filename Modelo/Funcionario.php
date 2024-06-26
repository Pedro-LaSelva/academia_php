<?php
    namespace Modelo;
    class Funcionario{
        private int $id;
        private ?string $nome;
        private ?string $cargo;
        private ?float $salario;

        public function __construct() { }

        public function getId(){
           return  $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome){
            $this->nome;
        }

        public function getCargo(){
            return $this->cargo;
        }

        public function setCargo(string $cargo){
            $this->cargo;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario(float $salario){
            $this->salario;
        }


    }



?>