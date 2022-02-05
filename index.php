<?php

  include("header.php");
  include("conexao.php");

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

      <!-- Default box -->
      <div class="card" style="margin-top: -32px; background-image: url(dist/img/pizzab.png);">

      <?php

        $result=mysqli_query($conexao,"SELECT * FROM clientes");
        $resultado_final=mysqli_fetch_assoc($result);

      ?>

          <div class="row" >

            <table class="table">
              <td style="width: 1px; padding-left: 20px; ">

                <img src="dist/empresas/<?=$resultado_final["logo"]?>" style="width: 100px; border-radius: 100%;">

              </td>
          <td style="color: #fff;">
              <h2 style="font-weight: bold; "><?=$resultado_final["nome_fantasia"]?></h2>
              <span ><i class=" fas fa-map-marker-alt"></i><?=$resultado_final["endereco"]?></span> <p>
              <span data-toggle="modal" data-target="#exampleModal" ><i class=" fas fa-clock"></i> <?=$resultado_final["entrega"]?> • <i class=" fas fa-eye"></i> Ver mais</span> </p>
          </td>

          </table>

          </div>

      </div>

    <!-----------MODAL VER MAIS ----------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Horários de Funcionamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

                <p>DOM	18:00 às 23:10</p>
                  <p>TER	18:00 às 23:30</p>
                    <p> QUA	18:00 às 23:40</p>
                      <p> QUI	18:00 às 23:40</p>
                        <p>SEX	18:00 às 23:40</p>
                          <p>SÁB	18:00 às 23:30</p>

            <h5 style="font-weight: bold;">Opções de Entrega</h5>
            <span class="label label-pagamento"><i class="fa fa-motorcycle"></i> Delivery    </span>
            <span class="label label-pagamento" style="margin-left: 10px;"><i class="fa fa-shopping-bag"></i> Retirada</span>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
          </div>
        </div>
      </div>
    </div>
    <!-----------MODAL VER MAIS ----------->

        <div id="myWorkContent">
     <a href=""><img src="dist/img/1.png" height="50%" style="border-radius:8px; margin-right:3px"></a>
     <a href=""><img src="dist/img/2.jpg" height="50%" style="border-radius:8px; margin-right:3px"></a>
     <a href=""><img src="dist/img/3.png" height="50%" style="border-radius:8px; margin-right:3px"></a>
     <a href=""><img src="dist/img/promocoes.png" height="50%" style="border-radius:8px; margin-right:3px"></a>

      </div>  <!--end myWorkContent PROMOÇÕES FUTURAS-->

      <style>
        #myWorkContent{
            width: auto;
            /*margin-left:-14px;
            margin-right:-14px;*/
            height: 120px;
            margin-top:5px;
            margin-bottom:-30px;
            /*border: 13px solid #fff;*/
            /*overflow-x: scroll;*/
            overflow-y: hidden;
            white-space: nowrap;

        }
        </style>

<!-----------CARD  INFOBOX---------------->

<div class="row">

        <div class="col-12 col-sm-6 col-md-3">
          <a href="sabores.php" style="text-decoration: none; color: #000;">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><img src="dist/img/p1.jpg" ></span>

          <div class="info-box-content">
            <span class="info-box-text">Pizza Individual</span>
            <span class="info-box-number">
              Até 1 sabor
            </span>
          </div>
        <!-- /.info-box-content -->
       </div>
        </a>
      </div>


      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><img src="dist/img/p1.jpg" ></span>

          <div class="info-box-content">
            <span class="info-box-text">Pizza Média</span>
            <span class="info-box-number">
              Até 2 sabores
            </span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><img src="dist/img/p1.jpg" ></span>

          <div class="info-box-content">
            <span class="info-box-text">Pizza Grande</span>
            <span class="info-box-number">
              Até 2 sabores
            </span>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><img src="dist/img/p1.jpg" ></span>

          <div class="info-box-content">
            <span class="info-box-text">Pizza Família</span>
            <span class="info-box-number">
              Até 3 sabores
            </span>
          </div>
        </div>
      </div>
      <!-- /.card -->
 </div> <!--fim row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

    include("footer.php");

  ?>
