<!DOCTYPE html>
<html>
    <head>
    <title>Tela de Cadastro</title><!--titulo que fica na pagina(em cima)-->
   
   
    <!-- Inclui o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
<body>
    <div>&nbsp;</div><!-- Contêiner Bootstrap pra centralizar o conteúdo -->
    <div class="container">
        <h2>Cadastro</h2><!--titulo que dentro da pagina-->

    
        <form method = "POST" action="controller/pessoaController.php">

        <!--campos pra inserir informações-->

            <div class="form-group"><!--organiza e estiliza elementos do formulario-->

                <label for="nome">Nome:</label><!--nome do campo-->
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome:">
                <!--carcteristicas como tipo e etc-->


            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço:">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro:">
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP:">
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade:">
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado:">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone:">
            </div>

            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o celular:">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button><!--botao pra enviar o formulario>
        </form>
    </div>
</body>
</html>