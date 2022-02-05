<?php

  include("header.php");
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

      <!-- Default box -->
      <div class="card" style="margin-top: -32px; background-image: url(../dist/img/pizza.png);">

      <?php

        /* empresa a ser buscada mudar apenas o valor da variavel com o cadastro no banco*/ 
        $id_empresa=2;

        $result=mysqli_query($conexao,"SELECT * FROM clientes WHERE id_clientes = $id_empresa ");
        $resultado_final=mysqli_fetch_assoc($result);

      ?>

          <div class="row" >

            <table class="table">
              <td style="width: 1px; padding-left: 20px; ">

                <img src="../dist/empresas/<?=$resultado_final["logo"]?>" style="width: 100px; border-radius: 100%;">

              </td>
          <td style="color: #fff;">
              <h2 style="font-weight: bold; "><?=$resultado_final["nome_fantasia"]?></h2>
              <span ><i class=" fas fa-map-marker-alt"></i><?=$resultado_final["endereco"]?> • </i><?=$resultado_final["bairro"]?> • </i><?=$resultado_final["cidade"]?> • </i><?=$resultado_final["estado"]?></span> <p>
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
        <?php

          $result = "SELECT * FROM categorias WHERE id_clientes = $id_empresa";
          $resultado_categorias = mysqli_query($conexao, $result);

          while ($linhas = mysqli_fetch_array($resultado_categorias)){
            if($linhas['nome_categoria'] == 'Hamburguer') {
              $pagina = "hamburger.php";
            }else{
              if($linhas['nome_categoria'] == 'Bebidas') {
                $pagina = "bebidas.php";
            }else{
              if($linhas['nome_categoria'] == 'Combinados'){
                $pagina = "combinados.php";
              }else{
                if($linhas['nome_categoria'] == 'Temakis'){
                  $pagina = "temakis.php";
                }else{
                  if($linhas['nome_categoria'] == 'Sobremesa'){
                    $pagina = "sobremesa.php";
                  }else{
                    if($linhas['nome_categoria'] == 'Pizza'){
                      $pagina = "tamanho.php";
                    }else{
                      echo "teste";
                    }
                  }
                }
              }
            }
          }
        ?>
          <a href='javascript::' onclick="load_page('<?=$pagina?>');"><img src="../dist/categorias/<?=$linhas["logo"]?>" height="50%" style="border-radius:8px; margin-right:3px"></a>
        <?php
          }
        ?>
        <a href=""><img src="../dist/categorias/promocoes.png" height="50%" style="border-radius:8px; margin-right:3px"></a>

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

<div id="pagina_retorno"> 

<?php
  include("tamanho.php");
?>

</div> <!--fim row-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

    include("footer.php");

  ?>


<script type="text/javascript">
function load_page(arquivo){

    if(arquivo){
      $.ajax({
          type: 'GET',
          data: arquivo,
          url: arquivo,

          beforeSend: function() {
            $("#pagina_retorno").html('<img src="images/preload.gif" style="margin-left:41%; margin-top:50%; width:60px">');
           },


          success: function(data){
            $("#pagina_retorno").html(data);
          },

          error: function() {
            $("#pagina_retorno").html('<div class="card text-center" style="padding:20px"> <div class="card-body" style="padding:10px"> <i class="fa fa-wifi"></i><i class="fa fa-close text-danger" ></i> <i class="fa fa-mobile" ></i> <p class="card-text">Parece que você está sem conexão! Verifique sua internet..</p></div> </div> '); 
         }
      });
    }
  }

 
</script>