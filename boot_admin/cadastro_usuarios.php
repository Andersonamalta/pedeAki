<?php

  include("header_boot.php");

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

<div>

  <form action="../../index.html" method="post">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Nome completo">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="E-mail">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Senha">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <input type="submit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="CADASTRAR" style="background-color: rgb(61, 104, 245); color: #fff; font-weight: bold;">
  </form>




 </div> <!--fim row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

  include("footer_boot.php");

?>
