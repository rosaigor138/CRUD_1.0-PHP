<?php
include 'conexao.php';
$buscar_cadastros = 'SELECT * FROM contato';
$query_dados = mysqli_query($connx, $buscar_cadastros);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de numero</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        #excluir{
            background-color: red;
            font-style: italic;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <table class="table">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>DDI</th>
                  <th>DDD</th>
                  <th>Numero</th>
              </tr>
          </thead>
          <tbody>
              <?php
              while($receber_cadastros = mysqli_fetch_array($query_dados)){
                $id = $receber_cadastros['id'];
                $nome = $receber_cadastros['nome'];
                $ddi = $receber_cadastros['ddi'];
                $ddd = $receber_cadastros['ddd'];
                $numero = $receber_cadastros['numero'];
              
              ?>
                <tr>
                    <td scope="row"></div><?php echo $id;  ?></td> 
                    <td> <?php echo $nome; ?></td>
                    <td> <?php echo $ddi; ?> </td>
                    <td><?php echo $ddd; ?></td>
                    <td><?php echo $numero; ?></td>
                </tr>
              <?php }; ?> 
          </tbody>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                

    <table align="center" border="1">
          <tr>
            <th>Selecione uma das opções abaixo</th>
          </tr>
          <tr>
            <td><a href="/CRUD 2.0/inserir.php">Clique aqui caso queira inserir alguém no Banco de Dados</a></td>
          </tr>
          <tr>
            <td>
              <a href="/CRUD 2.0/editar.php">Clique aqui para editar ou excluir algum dos cadastros</a>
            </td>
          </tr>
      </table>
    </body>
</html>