<php

  include 'conexao.php';

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];


  $recebendo_cadastros = "UPDATE
  tb_cliente
  SET nome='$nome', email ='$email', celular = '$celular'
  WHERE id = '$id'";

  $query_cadastros = mysqli_query($connx,$recebendo_cadastros);

  header('location: listagem.php');


   ?>