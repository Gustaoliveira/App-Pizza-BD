<?php
  $conexao = mysqli_connect("localhost", "id11074596_pizzo", "lerick123", "id11074596_bdpizzaria");
  // Argumentos: Onde está o banco;
  // Usuário do banco
  // Senha do banco
  // Nome do banco
  $sabor = $_POST['sabor'];
  $valor = $_POST['valor'];
  $query = "insert into tbPizza VALUES (null, '$sabor', $valor)";
  mysqli_query($conexao,$query);
  echo "Registro salvo!";
?>
