<?php 

session_start();
if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['conta']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['conta']);
  header('location:../index.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fortnite</title>
  <link rel="shortcut icon" href="../img/icon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your cu.stom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

  
  <!--Main layout-->
  <main class="mt-3 pt-3">
    <div class="container wow fadeIn">

      

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" method="POST" action="../model/CREATE_compravip.php">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="nome" name="nome"  class="form-control">
                    <label for="firstName" class="">Nome</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="sobrenome" name="sobrenome"  class="form-control">
                    <label for="lastName" class="">Sobrenome</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form mb-5">
                <input type="text" id="usuario" name="usuario" class="form-control">
                <label for="usuario">Usu??rio</label>
              </div>


              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="senha" name="senha" class="form-control">
                <label for="senha">Senha</label>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="endereco" name="endereco" class="form-control">
                <label for="address">Endere??o</label>
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="country">Pa??s</label>
                  <select class="custom-select d-block w-100" id="pais" name="pais" required>
                    <option>Brasil</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor, selecione um pa??s v??lido.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">Estado</label>
                  <select class="custom-select d-block w-100" id="estado" name="estado" required>
                    <option>Acre</option>
                    <option>Alagoas</option>
                    <option>Amap??</option>
                    <option>Amazonas</option>
                    <option>Bahia</option>
                    <option>Cear??</option>
                    <option>Distrito Federal</option>
                    <option>Esp??rito Santo</option>
                    <option>Goi??s</option>
                    <option>Maranh??o</option>
                    <option>Mato Grosso</option>
                    <option>Mato Grosso do Sul</option>
                    <option>Minas Gerais</option>
                    <option>Par??</option>
                    <option>Para??ba</option>
                    <option>Paran??</option>
                    <option>Pernambuco</option>
                    <option>Piau??</option>
                    <option>Rio de Janeiro</option>
                    <option>Rio Grande do Norte</option>
                    <option>Rio Grande do Sul</option>
                    <option>Rond??nia</option>
                    <option>Roraima</option>
                    <option>Santa Catarina</option>
                    <option>S??o Paulo</option>
                    <option>Sergipe</option>
                    <option>Tocatins</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor, selecione um estado3 v??lido.
                  </div>



                </div>

                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">Upgrade</label>
                  <select class="custom-select d-block w-100" id="conta" name="conta" required>
                    <option>VIP</option>
                    <option>MVP</option>
                    
                  </select>
                  <div class="invalid-feedback">
                    Por favor, selecione um estado3 v??lido.
                  </div>

                  

                </div>  
                <!--Grid column-->


                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="zip">C??digo Postal</label>
                  <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                  <div class="invalid-feedback">
                    C??digo postal necess??rio.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              

              

              <hr>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="cartao_de_credito" name="cartao_de_credito" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Cart??o de cr??dito</label>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Nome do t??tular</label>
                  <input type="text" class="form-control" id="nome_do_titular" name="nome_do_titular" required>
                  <small class="text-muted">Nome completo como exibido no cart??o</small>
                  <div class="invalid-feedback">
                    O nome no cart??o ?? obrigat??rio
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">N??mero do Cart??o de Cr??dito</label>
                  <input type="text" class="form-control" name="n_cartao" id="n_cartao"required>
                  <div class="invalid-feedback">
                    ?? necess??rio o n??mero do cart??o de cr??dito
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expira????o</label>
                  <input type="text" class="form-control" name="expiracao" id="expiracao"  required>
                  <div class="invalid-feedback">
                    Data de vencimento necess??ria
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cvv" name="cvv"  required maxlength="3">
                  <div class="invalid-feedback">
                    C??digo de seguran??a necess??rio
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Compra</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/gaming/fortnite/?fbsource=1103&external_ref=game_search_unit" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/FortniteGame" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/user/epicfortnite" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://br.pinterest.com/search/pins/?q=fortnite&rs=typed&term_meta[]=fortnite%7Ctyped" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      ?? 2020 Copyright
      
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
