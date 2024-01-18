<!--LUANA ALVES NERY DA SILVA-->
<?php
    include_once 'classes/cadastro.php';
    $cad = new Cadastro();
  
    if(isset($_GET['excluirUs'])){
        $id = base64_decode($_GET['excluirUs']);
        $excluirUsuario = $cad->excluirUsuario($id);

       // $cad->excluirUsuario($id);
    }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Todos os usuários</title>
  </head>
  <body>
    
  <br>
  <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                               <h3>Lista de Usuários</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="novo-usuario.php" class="btn btn-info float-right">Novo Usuário</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                    <table class="table tbale-bordered">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Senha</th>
                            <th>Data de Nascimento</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $todosOsUsuarios = $cad->listarUsuarios();
                            if($todosOsUsuarios){
                                while($row = mysqli_fetch_assoc($todosOsUsuarios)){
                                    ?>
                                       <tr>
                                           <td><?=$row['nome']?></td>
                                           <td><?=$row['email']?></td>
                                           <td><?=$row['senha']?></td>
                                           <td><?=$row['data_nasc']?></td>
                                           <td>
                                            <a href="editar.php?id=<?=base64_encode($row['id'])?>" class="btn btn-sm btn-warning">Editar</a>
                                            <a href="?excluirUs=<?=base64_encode($row['id'])?>" onclick="return confirm('Deseja excluir?')" class="btn btn-sm btn-danger">Excluir</a>
                                           </td>
                                       </tr>
                                    <?php
                                }
                            } 
                        ?>
                    </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>