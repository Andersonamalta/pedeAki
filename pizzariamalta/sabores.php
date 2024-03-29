<?php

  include("header.php");
  include("../conexao.php");

  $tamanho = $_GET['tamanho'];
  $id_cliente = 2; // Sempre alterar de acordo o cliente
  $categoria = 8; // Sempre alterar a categoria de acordo o cliente



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

        <a href="index.php"><button class="btn btn-light" style="margin-top: -50px;"><i class="fa fa-arrow-left"></i> Voltar</button></a>
        <h3 style="text-align: center; margin-left: 70px; margin-top:-50px"><b>Selecione o sabor</b></h3>
<!-----------CARD  INFOBOX---------------->

<div class="row">
  <?php

    $result= "SELECT * FROM produtos WHERE id_clientes = '$id_cliente' AND tamanho = '$tamanho' AND id_categorias = '$categoria'";
    $resultado = mysqli_query($conexao, $result);

    while($linhas = mysqli_fetch_array($resultado)){

  ?>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><img src="../dist/produtos/<?php echo $linhas['foto_produto']?>" ></span>

          <div class="info-box-content" style="padding-right: 0px;">
            <span class="info-box-text"><?=$linhas['nome_produto']?></span>
            <small style="font-size:10px">
                    <?=$linhas['descricao']?>
            </small>
          </div>

          <span class="info-box-icon " >

                <input class="form-check-input limited" style="width: 30px; height: 30px; margin-top: -20px; margin-left: 7px;"
                 type="checkbox" value="" id="flexCheckDefault" >
                 <small style="font-size: 15px; margin-top: 45px; font-weight: bold;">R$ <?php echo number_format($linhas['preco'],2)?></small>
          </span>
        <!-- /.info-box-content -->
       </div>
        <!-- /.info-box-->
      </div><br><br>
  <?php
    }
  ?>

      <!-- /.card -->
 </div> <!--fim row-->

          <div class="row fixed-bottom" style="padding:5%; background-color: #fff;">

              <div class="botao_adicionar" style="padding-top:1.5px;">
              <input type="number" min="0" max="100" value="0" name="quantidade_produto"
              id="quantidade_produto"/>
              </div>

              <div class="botao_adicionar" style="margin-left: 8px;">
              <button class="btn btn-primary text-center" style="padding-top: 5px; border-radius: 10px;">
                  Adicionar ao carrinho
              </div>
          </div>
    </section>
    <!-- /.content -->

  </div>



    <?php
      if($tamanho == "Individual"){

    ?>
      <script>
        $(document).on('click', '.limited', function(){
          var limit = 1;
          var counter = $('.limited:checked').length;
          if(counter > limit) {
              this.checked = false;
              alert('Limite atingido');
          }
        });
      </script>
    <?php
    }if($tamanho == "Média"){
    ?>
        <script>
        $(document).on('click', '.limited', function(){
          var limit = 2;
          var counter = $('.limited:checked').length;
          if(counter > limit) {
              this.checked = false;
              alert('Limite atingido');
          }
        });
      </script>
    <?php
    }if($tamanho == "Grande"){
    ?>
      <script>
          $(document).on('click', '.limited', function(){
            var limit = 2;
            var counter = $('.limited:checked').length;
            if(counter > limit) {
                this.checked = false;
                alert('Limite atingido');
            }
          });
      </script>
    <?php
      }if($tamanho == "Familia"){
    ?>
      <script>
          $(document).on('click', '.limited', function(){
            var limit = 3;
            var counter = $('.limited:checked').length;
            if(counter > limit) {
                this.checked = false;
                alert('Limite atingido');
            }
          });
      </script>
    <?php
      }
    ?>



  <style>

      @media only screen and (min-width: 1024px) {
        .botao_adicionar{
          margin-left: 200px;
        }
      }



  </style>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>




<!-----BOTÃO DE QUANTIDADE-->
<style>
	input[type=number] {
  float: left;
  width: 40px;
  height: 35px;
  padding: 0;
  font-size: 1.2em;
  text-transform: uppercase;
  text-align: center;
  color: #3172eb;
  border: 2px #Fff solid;
  background: #fff;
  outline: none;
  pointer-events: none;
}

span.spinner {

  height: 70px;
  user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}

span.spinner > .sub,
span.spinner > .add {
	background: #D3D3D3;
  float: left;
  display: block;
  width: 35px;
  height: 35px;
  text-align: center;
  font-family: Lato;
  font-weight: 700;
  font-size: 1.2em;
  line-height: 33px;
  color: #3172eb;
  border: 2px #Fff solid;
  border-right: 0;
  border-radius: 10px 0 0 10px;
  cursor: pointer;
  transition: 0.1s linear;
  -o-transition: 0.1s linear;
  -ms-transition: 0.1s linear;
  -moz-transition: 0.1s linear;
  -webkit-transition: 0.1s linear;
}

span.spinner > .add {
  top: 0;
  border: 2px #Fff solid;
  border-left: 0;
  border-radius: 0 10px 10px 0;
}

span.spinner > .sub:hover,
span.spinner > .add:hover {
  background: #3172eb;
  color: #fff;
}
 input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
 -webkit-appearance: none;
}

</style>

<script>
    (function($) {
    $.fn.spinner = function() {
    this.each(function() {
    var el = $(this);

    // add elements
    el.wrap('<span class="spinner"></span>');
    el.before('<span class="sub">-</span>');
    el.after('<span class="add">+</span>');

    // substract
    el.parent().on('click', '.sub', function () {
    if (el.val() > parseInt(el.attr('min')))
    el.val( function(i, oldval) { return --oldval; });
    });

    // increment
    el.parent().on('click', '.add', function () {
    if (el.val() < parseInt(el.attr('max')))
    el.val( function(i, oldval) { return ++oldval; });
    });
        });
    };
    })(jQuery);

    $('input[type=number]').spinner();
</script>

<!-----FIM BOTÃO DE QUANTIDADE-->

<?php

include("footer.php");

?>
