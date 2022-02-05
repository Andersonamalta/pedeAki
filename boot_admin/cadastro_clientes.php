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

<form action="cadastroClientes.php" method="post" enctype="multipart/form-data">
  <div class="row">


      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="razao_social" aria-describedby="emailHelp" placeholder="Razão Social" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="nome_fantasia" aria-describedby="emailHelp" placeholder="Nome Fantasia" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="cnpj" maxlength="18" onkeypress="this.value=FormataCnpj(event)" aria-describedby="emailHelp" placeholder="CNPJ" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="inscricao_estadual" maxlength="11" onkeypress="this.value=FormataIe(event)" aria-describedby="emailHelp" placeholder="Inscrição Estadual">
      </div><br><br><br>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="Endereço" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp" placeholder="Bairro" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="text" class="form-control" name="cidade" aria-describedby="emailHelp" placeholder="Cidade" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-1">
        <div class="form-group">
          <select class="form-control" name="estado" required="">
            <option value="">UF</option>
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
        <input type="text" class="form-control" name="cep" maxlength="9" onkeypress="this.value=FormataCep(event)" aria-describedby="emailHelp" placeholder="CEP" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-2">
        <input type="text" class="form-control" name="telefone" maxlength="16" onkeypress="this.value=FormataTel(event)" aria-describedby="emailHelp" placeholder="Telefone" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="E-mail" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-2">
        <input type="text" class="form-control" name="entrega" aria-describedby="emailHelp" placeholder="Tempo de entrega" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-2">
        <input type="password" class="form-control" name="senha" aria-describedby="emailHelp" placeholder="Senha de acesso" required="">
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <input type="file" class="form-control" onchange="loadFile(event)" name="pic" aria-describedby="emailHelp" required="" accept="image/*">
      </div>

      <div class="col-lg-2" id="inp1">
        <img id="output" style="width:100px;" /><br>
          <script>
            var loadFile = function(event) {
              var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
            };
          </script>
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
