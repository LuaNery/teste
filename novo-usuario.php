<?php
    include_once 'classes/cadastro.php';
    $cad = new Cadastro();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $cadastro = $cad->addCadastro($_POST);
    }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastro</title>
  </head>
  <body>
    
  <br>
  <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                       <div class="row">
                         <div class="col-md-6">
                            <h3>Cadastrar Usuários</h3>
                         </div>
                         <div class="col-md-6">
                            <a href="index.php" class="btn btn-info float-right">Listar Usuários</a>
                         </div>
                       </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control">
                            
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control">
                            
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control">
                           
                            <label>Data de Nascimento</label>
                            <input type="date" name="data_nasc" class="form-control">

                            <button type="submit" class="btn btn-primary" class="form-control">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>