<?php

  include("../conexao.php");

?>
<div class="row">

<?php
  $id_empresa=1; //ALTERAR ESSE
  $id_categoria=1; // ALTERAR ESSE

  $result = "SELECT * FROM produtos WHERE id_clientes = $id_empresa AND id_categorias = $id_categoria";
  $resultado = mysqli_query($conexao, $result);

  while($linhas = mysqli_fetch_array($resultado)){

    ?>
      <div class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target="#modal<?=$linhas['id_produtos']?>">

          <div class="info-box">

            <span class="info-box-icon"><img src="../dist/produtos/<?php echo $linhas['foto_produto']?>" ></span>

            <div class="info-box-content">
              <span class="info-box-text"> <?php echo $linhas['nome_produto']?>  <b><?php echo $linhas['tamanho']?></b></span>
              <div style="width:250px" >
              <span class="info-box-text"> <?php echo $linhas['descricao']?></span>
              </div>
              <span class="info-box-number"> R$ <?php echo number_format($linhas['preco'],2)  ?></span>
            </div>

          </div>
      </div>

    <div class="modal" tabindex="-1" id="modal<?=$linhas['id_produtos']?>" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <img style="width: 100%;" src="../dist/produtos/<?php echo $linhas['foto_produto']?>">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          <h5 class="modal-title" style="font-weight: bold;"><?php echo $linhas['nome_produto']?></h5>
            <p><?php echo $linhas['descricao']?></p>
            <span class="info-box-number" style="color:#32CD32; font-weight: bold;"> R$ <?php echo number_format($linhas['preco'],2)?></span>
            <div class="modal-header" style="margin-bottom: 10px;"></div>
            <p><i class="fas fa-comment-alt"></i> Alguma observação?</p>
            <input type="text" class="form-control" id="inputObs" placeholder="Ex: Tirar a cebola, maionese à parte, etc.">
          </div>
          <div class="modal-footer">
            <div class="botao_adicionar" style="padding-top:1.5px;">
                <input type="number" min="1" max="100" value="1" name="quantidade_produto"
                id="quantidade_produto"/>
            </div>

            <button type="button" class="btn" style="background-color: #FF0000; color:#fff; border-radius:10px;" onclick="saveList(<?=$linhas['id_clientes']?>, <?=$linhas['id_produtos']?>, '<?=$linhas['nome_produto']?>', document.getElementById('quantidade_produto').value, document.getElementById('inputObs').value , <?php echo number_format($linhas['preco'],2)?>)">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
?>



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
  color: #000;
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
	background: #fff;
  float: left;
  display: block;
  width: 35px;
  height: 35px;
  text-align: center;
  font-family: Lato;
  font-weight: 700;
  font-size: 1.2em;
  line-height: 33px;
  color: #FF0000;
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
  background: #FF0000;
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

<!---- Salvar dados no LocalStorage---->
<script>

  function saveList(id_cliente, id_produto, nome, quantidade, observacao, preco) {

    // converte os dados em string e salva no local storage
    /*localStorage.setItem('id_cliente', JSON.stringify(id_cliente));
    localStorage.setItem('id_produto', JSON.stringify(id_produto));
    localStorage.setItem('nome_produto', JSON.stringify(nome));
    localStorage.setItem('quantidade', JSON.stringify(quantidade));
    valor = preco * quantidade;
    localStorage.setItem('valor_total', JSON.stringify(valor));*/

    const cliente = id_cliente;
    const produto = id_produto;
    const name = nome;
    const qnt = quantidade;
    const obs = observacao;
    const valor = preco * quantidade;

    const dataObj = { cliente, produto, name, qnt, obs, valor };

    if(localStorage.getItem('itens') === null){
      localStorage.setItem('itens', JSON.stringify([dataObj]));
    }else{
      localStorage.setItem(
        'itens',
        JSON.stringify([
          JSON.parse(localStorage.getItem('itens')),
          dataObj
        ])
      );
    }
  }

</script>

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

</div> <!--fim row-->
