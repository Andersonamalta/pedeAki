<?php
session_start();
include('../conexao.php');


if(isset($_POST['id_clientes'])){

  $id_clientes=$_POST['id_clientes'];
  $id_categorias=$_POST['id_categorias'];
  $nome_produto=$_POST['nome_produto'];
  $tamanho=$_POST['tamanho'];
  $preco=$_POST['preco'];
  $descricao=$_POST['descricao'];


  if(isset($_FILES['pic'])){

     $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
     $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
     $dir = '.././dist/produtos/'; //Diretório para uploads
     move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
     echo("Imagen enviada com sucesso!");

  }


  $resultado1 = mysqli_query ($conexao, "INSERT INTO produtos (id_clientes, id_categorias, nome_produto, tamanho, preco, descricao, foto_produto)
    VALUES ('$id_clientes', '$id_categorias', '$nome_produto', '$tamanho', '$preco', '$descricao', '$new_name')");

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

 window.location.href="cadastro_produtos.php";

</script>
