<?php
session_start();
include('../conexao.php');

  $razao_social=$_POST['razao_social'];
  $nome_fantasia=$_POST['nome_fantasia'];
  $cnpj=$_POST['cnpj'];
  $inscricao_estadual=$_POST['inscricao_estadual'];
  $endereco=$_POST['endereco'];
  $bairro=$_POST['bairro'];
  $cidade=$_POST['cidade'];
  $estado=$_POST['estado'];
  $cep=$_POST['cep'];
  $telefone=$_POST['telefone'];
  $email=$_POST['email'];
  $entrega=$_POST['entrega'];
  $senha=$_POST['senha'];
  $status=$_POST['status'];
  $id=$_POST['id_cliente'];

  $resultado = mysqli_query($conexao,"UPDATE clientes SET razao_social='$razao_social', nome_fantasia='$nome_fantasia',
  cnpj='$cnpj', inscricao_estadual='$inscricao_estadual', endereco='$endereco', bairro='$bairro', cidade='$cidade',
  estado='$estado', cep='$cep', telefone='$telefone', email='$email', senha='$senha', entrega='$entrega', status='$status'
  WHERE id_clientes='$id'");

?>

<script>

  window.location.href="lista_clientes.php";

</script>
