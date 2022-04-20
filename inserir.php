<php 


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        table,th,td{
            border: 1px solid black;
        }
        th{
            background-color: #808080;}
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="tabela" id="tabela_insercao">  
        <table class="table" align="center">
            <form action="/CRUD 2.0/cadastro.php" method="POST">
                <thead>
                    <tr id="cabecalho">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>DDI</th>
                        <th>DDD</th>
                        <th>NUMERO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><input type="text" name="nome"> </td>
                        <td><input type="text" name="ddi"> </td>
                        <td><input type="text" name="ddd"> </td>
                        <td><input type="text" name="numero"> </td>
                    </tr>
                    <tr align="center">
                        <td colspan="5"><input type="submit" value="Inserir"></th>
                    </tr>
                </tbody>
            </form>
            </table>
        
    </div>
    <table align="center" border="1">
          <tr>
            <th>Selecione uma das opções abaixo</th>
          </tr>
          <tr>  
            <td><a href="/CRUD 2.0/listagem.php">Clique aqui para ver os usuarios já inseridos</a></td>
          </tr>
          <tr>
            <td>
              <a href="/CRUD 2.0/editar.php">Clique aqui para editar ou excluir algum dos cadastros</a>
            </td>
          </tr>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>