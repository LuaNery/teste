<?php

include_once 'Database/config.php';
class Database {
    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $database = DATABASE;
    public $connection;
    public $error;

    public function __construct() {
        
        $this->connect();
    }

    public function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if (!$this->connection) {
            $this->error = "Erro na conexão com o banco de dados: " . $this->connection->connect_error;
            print"<script>alert('Erro na conexão com o banco de dados');</script>";
            return false;
        }
    }

    public function insert($sql) {
        $result = $this->connection->query($sql);
        if (!$result) {
            print"<script>alert('Erro na execução da inclusão');</script>";
            die("Erro na execução da inclusão: " . $this->connection->error);
        }
        return $result;
    }

    public function select($sql) {
        $result = $this->connection->query($sql);
        if (mysqli_num_rows($result) > 0){
            return $result;
        }
        print"<script>alert('Erro na execução da seleção');</script>";
        die("Erro na execução da seleção: " . $this->connection->error);
    }

    public function update($sql) {
        $result = $this->connection->query($sql);
        if (!$result) {
            print"<script>alert('Erro na execução da atualização');</script>";
            die("Erro na execução da atualização: " . $this->connection->error);
        }
        return $result;
    }

    public function excluir($sql) {
        $result = $this->connection->query($sql);
        if (!$result) {
            print"<script>alert('Erro na execução da exclusão');</script>";
            die("Erro na execução da exclusão: " . $this->connection->error);
        }
        return $result;
    }
}
?>