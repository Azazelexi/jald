  <?php

   include 'conexao.php'; // incluindo o banco de dados e chamando dentro da página

   $buscar_cadastro = "SELECT * FROM tb_cliente"; // Comando SQL para listar todos os clientes do BD
   $query_cadastro = mysqli_query($connx,$buscar_cadastro);

   ?>

  
  <!doctype html>
  <html lang="en">
    <head>
      <title> CADASTRO DE CLIENTES </title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">  #Organiza e centraliza a tabela
        <table class="table">
            <thead>
                <tr>
                    <th> id</th>
                    <th> Nome</th>
                    <th> Email</th>
                    <th> celular</th>
                </tr>
            </thead>
            <tbody>
              <?php
              while($receber_cadastros = mysqli_fetch_array($query_cadastro))
              {
              $id = $receber_cadastros['id'];
              $nome = $receber_cadastros['nome'];
              $email = $receber_cadastros['email'];
              $celular = $receber_cadastros['telefone'];
              

              ?>

                <tr>
                    <td scope="row"> <?php echo $id; ?> </td>
                    <td>  <input type="text" name="nome" value="<?php echo $nome; ?>"></td>
                    <td>  <input type="text" name="email" value="<?php echo $email; ?>">></td>
                    <td>  <input type="text" name="celular" value="<?php echo $celular; ?>"></td>
                    
                    <td> 

                    <form action="excluir.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- hidden é para excluir o id -->
                    <input type="submit" value="EXCLUIR">
                    </form> 

                  </td>
                </tr>
                
                <?php };  ?>              <!-- fechou o comando while -->


                <tr>
                  <form action="cadastro.php" method="post">
                    <td>  </td>
                    <td> <input type="text" name="nome"> </td>
                    <td> <input type="text" name="email"> </td>
                    <td> <input type="text" name="celular"></td>
                    <td> <input type="submit" value="cadastro"></td>
                  </form>
                </tr>
            </tbody>
        </table>
        </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>