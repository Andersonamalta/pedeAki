<?php
session_start();
include('../conexao.php');


if(isset($_POST['id_cliente'])){

  $id_cliente=$_POST['id_cliente'];
  $categoria=$_POST['categoria'];


  if(isset($_FILES['pic'])){

     $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
     $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
     $dir = '.././dist/categorias/'; //Diretório para uploads
     move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
     echo("Imagen enviada com sucesso!");

  }


  $resultado1 = mysqli_query ($conexao, "INSERT INTO categorias (id_clientes, nome_categoria, logo)
    VALUES ('$id_cliente', '$categoria', '$new_name')");

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

  window.location.href="cadastro_categorias.php";

</script>
