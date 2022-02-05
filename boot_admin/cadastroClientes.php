<?php
session_start();
include('../conexao.php');


if(isset($_POST['razao_social'])){

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
  $status="Ativo"; 

  if(isset($_FILES['pic'])){

     $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
     $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
     $dir = '.././dist/empresas/'; //Diretório para uploads
     move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
     echo("Imagen enviada com sucesso!");

  }


  $resultado1 = mysqli_query ($conexao, "INSERT INTO clientes (razao_social, nome_fantasia, cnpj, inscricao_estadual, endereco, bairro, cidade, estado, cep, telefone, email, senha, entrega, logo, status)
    VALUES ('$razao_social', '$nome_fantasia', '$cnpj', '$inscricao_estadual', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$telefone', '$email', '$senha', '$entrega','$new_name', '$status')");

  //$ultimo_id_inserido = mysqli_query($conexao, $resultado1); //inserção
  $ultimo_id = mysqli_insert_id($conexao); //atribui o ultimo id a variável

  $ultimo_id;


}


/*
if (mysqli_affected_rows($conexao) != 0 ){
  echo "
  <script type=\"text/javascript\">
  alert(\"Cliente cadastrado com Sucesso.\");
  </script>
  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/pedeaki/boot_admin/cadastro_clientes.php'>
  ";
}else{
  echo "
  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/pedeaki/boot_admin/cadastro_clientes.php'>
  <script type=\"text/javascript\">
  alert(\"Houve um erro ao cadastrar.\");
  </script>
  ";
}

*/
?>

<script>

  window.location.href="cadastro_clientes.php";

</script>
