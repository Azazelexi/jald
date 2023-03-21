  <?php

  include 'conexao.php';

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];


  $recebendo_cadastros = "INSERT INTO
  tb_cliente
  VALUES('', '$nome', '$email', '$celular')";

  $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

  header('location: listagem.php');


   ?>
   