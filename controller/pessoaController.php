<?php

// Inclui o arquivo que contém a definição da classe Pessoa
require_once '../model/pessoa.php';

class pessoaController{
    private $pessoa;// Objeto da classe Pessoa
   
    public function __construct(){
        $this->pessoa = new Pessoa(); // Instancia um objeto da classe Pessoa
        $this->inserir();
    }

    public function inserir(){ //Define os atributos da pessoa com os valores recebidos via POST
        $this-> pessoa->setNome($_POST['nome']);
        $this-> pessoa->setEndereco($_POST['endereco']);
        $this-> pessoa->setBairro($_POST['bairro']);
        $this-> pessoa->setCep($_POST['cep']);
        $this-> pessoa->setCidade($_POST['cidade']);
        $this-> pessoa->setEstado($_POST['estado']);
        $this-> pessoa->setTelefone($_POST['telefone']);
        $this-> pessoa->setCelular($_POST['celular']);     
        
        $this->pessoa->inserir(); // Chama o método inserir da classe Pessoa para inserir os dados no banco de dados
    }
}
new pessoaController
?>