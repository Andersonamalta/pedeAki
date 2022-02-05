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

    <table class="table table-striped table-dark">
      <thead>
        <tr style= "text-align:center;">
          <th scope="col">ID</th>
          <th scope="col">LOGO</th>
          <th scope="col">NOME</th>
          <th scope="col">CNPJ</th>
          <th scope="col">STATUS</th>
          <th scope="col">VER MAIS</th>
          <th scope="col">EDITAR</th>
        </tr>
      </thead>
      <?php

        $result_empresas = "SELECT * FROM clientes";
        $resultado_empresas = mysqli_query($conexao, $result_empresas);

        while ($linhas = mysqli_fetch_array($resultado_empresas)){
          if ($linhas["status"] == 'Ativo'){
            $status = "🟢";
          }else{
            $status = "🔴";
          }
      ?>
      <tbody>
        <tr style= "text-align:center;">
          <th scope="row"><?=$linhas["id_clientes"]?></th>
          <td><img src="../dist/empresas/<?=$linhas["logo"]?>" style="width: 40px; border-radius:50px;"></td>
          <td><?=$linhas["nome_fantasia"]?></td>
          <td><?=$linhas["cnpj"]?></td>
          <td><?=$status?></td>
          <td><a>👁</a></td>
          <td><a href="editar_cadastro.php?id=<?=$linhas["id_clientes"]?>">✍</a></td>
        </tr>
      </tbody>
      <?php
          }
        ?>
    </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

  include("footer_boot.php");

?>
