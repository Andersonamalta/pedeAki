<?php

  include("../conexao.php");

  $id_cliente=2;

  $result = "SELECT * FROM produtos WHERE id_clientes = $id_cliente";
  $resultado = mysqli_query($conexao, $result);
  $linhas = mysqli_fetch_assoc($resultado);




?>

<div class="row">

  <div class="col-12 col-sm-6 col-md-3">
    <a href="sabores.php?tamanho=<?=$linhas['tamanho']="Individual"?>" style="text-decoration: none; color: #000;">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><img src="../dist/img/p1.jpg" ></span>

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
  <a href="sabores.php?tamanho=<?=$linhas['tamanho']="Média"?>" style="text-decoration: none; color: #000;">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><img src="../dist/img/p1.jpg" ></span>

      <div class="info-box-content">
        <span class="info-box-text">Pizza Média</span>
        <span class="info-box-number">
          Até 2 sabores
        </span>
      </div>
    </div>
  </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
  <a href="sabores.php?tamanho=<?=$linhas['tamanho']="Grande"?>" style="text-decoration: none; color: #000;">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><img src="../dist/img/p1.jpg" ></span>

      <div class="info-box-content">
        <span class="info-box-text">Pizza Grande</span>
        <span class="info-box-number">
          Até 2 sabores
        </span>
      </div>
    </div>
  </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
  <a href="sabores.php?tamanho=<?=$linhas['tamanho']="Familia"?>" style="text-decoration: none; color: #000;">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><img src="../dist/img/p1.jpg" ></span>

      <div class="info-box-content">
        <span class="info-box-text">Pizza Família</span>
        <span class="info-box-number">
          Até 3 sabores
        </span>
      </div>
    </div>
  </a>
</div>
<!-- /.card -->
</div> <!--fim row-->

