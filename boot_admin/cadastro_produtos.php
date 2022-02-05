<?php

  include("header_boot.php");
  include("../conexao.php");

?>


    <!------Content----- -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <!-- <h1>Blank Page</h1>-->
          </div>
          <div class="col-sm-6">
           <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>-->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


<!-----------CARD  INFOBOX---------------->

<form action="cadastroProdutos.php"  method="POST" enctype="multipart/form-data">
<div class="row">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="form-group">
          <select class="form-control" name="id_clientes" required="">
          <option value="">SELECIONE O CLIENTE</option>
          <?php

            $result_empresas = "SELECT * FROM clientes";
            $resultado_empresas = mysqli_query($conexao, $result_empresas);

            while ($linhas = mysqli_fetch_array($resultado_empresas)){
              $id_clientes = $linhas["id_clientes"];
          ?>
          <option value="<?=$linhas["id_clientes"]?>"><?=$linhas["razao_social"]?> - <?=$linhas['id_clientes']?></option>
          <?php
            }
          ?>
          </select>
        </div><br>
     </div>

     <div class="col-12 col-sm-6 col-md-4">
        <div class="form-group">
          <select class="form-control" name="id_categorias" required="">
          <option value="">SELECIONE A CATEGORIA</option>
          <?php

            $result_empresas = "SELECT * FROM categorias";
            $resultado_empresas = mysqli_query($conexao, $result_empresas);

            while ($linhas = mysqli_fetch_array($resultado_empresas)){

          ?>
          <option value="<?=$linhas["id_categorias"]?>"><?=$linhas["nome_categoria"]?> - <?=$linhas['id_clientes']?></option>
          <?php
            }
          ?>
          </select>
        </div><br>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" id="nome_produto" name="nome_produto" aria-describedby="emailHelp" placeholder="Nome do produto">
      </div>

      <div class="col-12 col-sm-6 col-md-2">
        <div class="form-group">
          <select class="form-control" name="tamanho" required="">
            <option value="">Tamanho da Pizza</option>
            <option value="">Não possui</option>
            <option value="Individual">Individual</option>
            <option value="Pequeno">Pequeno</option>
            <option value="Médio">Média</option>
            <option value="Grande">Grande</option>
            <option value="Família">Famíla</option>
          </select>
        </div><br>
      </div>

      <div class="col-12 col-sm-6 col-md-2">
        <input type="text" class="form-control" id="preco" name="preco" aria-describedby="emailHelp" placeholder="Preço">
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp" placeholder="Descrição">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="file" onchange="loadFile(event)" class="form-control" id="foto_produto" name="pic" aria-describedby="emailHelp">
        <div class="col-lg-2" id="inp1">
        <img id="output" style="width:100px;" /><br>
          <script>
            var loadFile = function(event) {
              var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
            };
          </script>
        </div>
      </div><br><br><br><br>


      <input type="submit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="CONFIRMAR" style="margin: 20px; background-color: rgb(61, 104, 245); color: #fff; font-weight: bold;">

       <form>





 </div> <!--fim row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

  include("footer_boot.php");

?>
