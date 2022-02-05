<?php

  include("header_boot.php");
  include("../conexao.php");

?>

<script type="text/javascript" src="js/mascara.js"></script>

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

<form action="cadastroCategoria.php" method="post" enctype="multipart/form-data">
  <div class="row">

    <div class="col-12 col-sm-6 col-md-4">
        <div class="form-group">
          <select class="form-control" name="id_cliente" required="">
          <option value="">SELECIONE O CLIENTE</option>
          <?php

            $result_empresas = "SELECT * FROM clientes";
            $resultado_empresas = mysqli_query($conexao, $result_empresas);

            while ($linhas = mysqli_fetch_array($resultado_empresas)){

          ?>
          <option value="<?=$linhas["id_clientes"]?>"><?=$linhas["razao_social"]?></option>
          <?php
            }
          ?>
          </select>
        </div><br>
    </div>

    <div class="col-12 col-sm-6 col-md-4">
        <div class="form-group">
          <select class="form-control" name="categoria" required="">
            <option value="">SELECIONE A CATEGORIA</option>
            <option value="Pizza">Pizza</option>
            <option value="Sobremesa">Sobremesa</option>
            <option value="Hamburguer">Hamburguer</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Combinados">Combinados</option>
            <option value="Temakis">Temakis</option>
          </select>
        </div><br>
    </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="file" class="form-control" name="pic" aria-describedby="emailHelp" required="" accept="image/*">
      </div>

      <br><br><br><br>


      <input type="submit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="CADASTRAR" style="margin: 20px; background-color: rgb(61, 104, 245); color: #fff; font-weight: bold;">

</form>


 </div> <!--fim row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php

  include("footer_boot.php");

?>
