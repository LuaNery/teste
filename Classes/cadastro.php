<?php

    include_once 'Database/database.php';

    class Cadastro{

        public $database;
        
        public function __construct(){
            $this->database = new Database();
        }

        public function addCadastro($data){
            $nome = $data["nome"];
            $email = $data["email"];
            $senha = $data["senha"];
            $data_nasc = $data["data_nasc"];

            if(empty($nome) || empty($email) || empty($senha) || empty($data_nasc)){
                print"<script>alert('Todos os campos devem ser preenchidos.');</script>";
                return false;
            }

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $result = $this->database->insert($sql);
            
            if($result==true){
                print"<script>alert('Cadastrado com sucesso!');</script>";
                return true;
            }else{
                print"<script>alert('Não foi possível cadastrar.');</script>";
                return false;
            }
        }

        public function listarUsuarios(){
            $sql = "SELECT * FROM usuarios ORDER BY id DESC";
            $result = $this->database->select($sql);
            return $result;
        }

        public function getUsuariodById($id){
            $sql = "SELECT * FROM usuarios WHERE id = '$id'";
            $result = $this->database->select($sql);
            return $result;
        }

        public function updateUsuario($data, $id){
            $nome = $data["nome"];
            $email = $data["email"];
            $senha = $data["senha"];
            $data_nasc = $data["data_nasc"];

            if(empty($nome) || empty($email) || empty($senha) || empty($data_nasc)){
                print"<script>alert('Todos os campos devem ser preenchidos.');</script>";
                return false;
            }
            $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', data_nasc='$data_nasc' WHERE id = '$id'";
            
            $result = $this->database->update($sql);
            
            if($result==true){
                print"<script>alert('Cadastro atualizado sucesso!');</script>";
                return true;
            }else{
                print"<script>alert('Não foi possível atualizar cadastro.');</script>";
                return false;
            }
        }

        public function excluirUsuario($id){
            $sql = "DELETE FROM usuarios WHERE id = '$id'";
            $excluir = $this->database->excluir($sql);
            if($excluir){
                print"<script>alert('Cadastrado excluido com sucesso!');</script>";
                return true;
            }else{
                print"<script>alert('Não foi possível excluir cadastro.');</script>";
                return false;
            }
        }
    }
?>