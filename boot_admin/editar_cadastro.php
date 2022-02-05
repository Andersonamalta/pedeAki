<?php

  include("header_boot.php");
  include("../conexao.php");

  $id = intval($_GET['id']);

    $seleciona2=mysqli_query($conexao, "SELECT * FROM clientes WHERE id_clientes= '$id'" );
    $rows_emp=mysqli_fetch_assoc($seleciona2);

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
    <a href="lista_clientes.php"><button type="button" class="btn btn-outline-dark btn-sm" style="margin-top: -50px;"><i class="fa fa-arrow-circle-left"></i></button></a><br>
  <form action="editarCadastro.php" method="post" enctype="multipart/form-data">
    <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["razao_social"]?>" aria-describedby="emailHelp" name="razao_social" placeholder="Razão Social">
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["nome_fantasia"]?>" aria-describedby="emailHelp" name="nome_fantasia" placeholder="Nome Fantasia">
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" onkeypress="this.value=FormataCnpj(event)" value="<?=$rows_emp["cnpj"]?>" name="cnpj" aria-describedby="emailHelp" placeholder="CNPJ">
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" onkeypress="this.value=FormataIe(event)" value="<?=$rows_emp["inscricao_estadual"]?>" name="inscricao_estadual" aria-describedby="emailHelp" placeholder="Inscrição Estadual">
          </div><br><br><br>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["endereco"]?>" aria-describedby="emailHelp" name="endereco" placeholder="Endereço">
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["bairro"]?>" aria-describedby="emailHelp" name="bairro" placeholder="Bairro">
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["cidade"]?>" aria-describedby="emailHelp" name="cidade" placeholder="Cidade">
          </div>

          <div class="col-12 col-sm-6 col-md-1">
            <div class="form-group">
              <select class="form-control" name="estado" id="exampleFormControlSelect1">
                <option value="<?=$rows_emp["estado"]?>"><?=$rows_emp["estado"]?></option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
            </div><br>
          </div>

          <div class="col-12 col-sm-6 col-md-2">
            <input type="text" class="form-control" id="exampleInputEmail1" onkeypress="this.value=FormataCep(event)" value="<?=$rows_emp["cep"]?>" aria-describedby="emailHelp" name="cep" placeholder="CEP">
          </div>

          <div class="col-12 col-sm-6 col-md-2">
            <input type="text" class="form-control" id="exampleInputEmail1" onkeypress="this.value=FormataTel(event)" value="<?=$rows_emp["telefone"]?>" aria-describedby="emailHelp" name="telefone" placeholder="Telefone">
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["email"]?>" aria-describedby="emailHelp" name="email" placeholder="E-mail">
          </div>

          <div class="col-12 col-sm-6 col-md-2">
            <input type="password" class="form-control" id="exampleInputEmail1" value="<?=$rows_emp["senha"]?>" aria-describedby="emailHelp" name="senha" placeholder="Senha de acesso">
          </div>

          <div class="col-12 col-sm-6 col-md-2">
            <input type="text" class="form-control" name="entrega" aria-describedby="emailHelp" value="<?=$rows_emp["entrega"]?>" placeholder="Tempo de entrega">
          </div>

          <br><br><br><br>

          <div class="col-12 col-sm-6 col-md-2">
            <div class="form-group">
              <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option value="<?=$rows_emp["status"]?>"><?=$rows_emp["status"]?></option>
                <option value="Ativo">Ativo</option>
                <option value="Desativado">Desativado</option>
              </select>
            </div><br>
          </div>

          <div class="col-lg-2" id="inp1">
            <img id="output" src="../dist/empresas/<?=$rows_emp["logo"]?>" style="width:100px;" /><br>
              <script>
                var loadFile = function(event) {
                  var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };
              </script>
          </div>

          <input type="hidden" name="id_cliente" value="<?=$rows_emp["id_clientes"]?>">
        <input type="submit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="CONFIRMAR" style="margin: 20px; background-color: rgb(61, 104, 245); color: #fff; font-weight: bold;">
    </div> <!--fim row-->
 </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

  include("footer_boot.php");

?>
