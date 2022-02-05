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

<?php

  $result=mysqli_query($conexao, "SELECT count(id_clientes) as id_clientes FROM clientes
  WHERE status = 'ativo'");
  $rows=mysqli_fetch_assoc($result);


?>

<div class="row">

        <div class="col-12 col-sm-6 col-md-3">
          <a href="cadastro_clientes.php" style="text-decoration: none; color: #000;">
        <div class="info-box">
          <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-plus"></i></span>


            <div class="info-box-content">
              <span class="info-box-text"><b>CADASTRO DE CLIENTES</b></span>
              <span class="info-box-number" style="color: rgb(36, 168, 31);">
                Clientes ativos: <?php echo $rows['id_clientes']?>
              </span>
            </div>
        <!-- /.info-box-content -->
       </div>
        </a>
      </div>


      <div class="col-12 col-sm-6 col-md-3">
        <a href="lista_clientes.php" style="text-decoration: none; color: #000;">
        <div class="info-box">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><b>EDITAR CADASTROS</b></span>
          </div>
        </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><b>RELATÓRIOS</b></span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <a href="cadastro_usuarios.php" style="text-decoration: none; color: #000;">
          <div class="info-box">
            <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-id-card"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>CADASTRO DE USUÁRIOS</b></span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <a href="cadastro_produtos.php" style="text-decoration: none; color: #000;">
          <div class="info-box">
            <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-box-open"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>CADASTRO DE PRODUTOS</b></span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <a href="cadastro_categorias.php" style="text-decoration: none; color: #000;">
          <div class="info-box">
            <span class="info-box-icon bg-yellow elevation-1"><i class="fas fa-list-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>CATEGORIAS</b></span>
            </div>
          </div>
        </a>
      </div>
      <!-- /.card -->
 </div> <!--fim row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

  include("footer_boot.php");

?>
