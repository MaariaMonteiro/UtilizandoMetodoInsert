<?php

// Definição da classe Conexao
class Conexao {
   // Propriedades que armazenam informações de conexão
   private $host = "localhost"; // Host do banco de dados
   private $usuario = "root"; // Usuário do banco de dados
   private $senha = ""; // Senha do banco de dados
   private $banco = "exemplo_aula_25_04"; // Nome do banco de dados
   private $conexao; // Objeto de conexão

   // Método construtor da classe
   public function __construct() {
        // Tentativa de conexão com o banco de dados usando mysqli
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        // Verifica se houve erro na conexão
        if ($this->conexao->connect_error){
            // Em caso de erro, interrompe a execução e exibe a mensagem de erro
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
   }

   // Método para obter o objeto de conexão
   public function getConexao() {
        return $this->conexao; // Retorna o objeto de conexão
   }
}

?>
