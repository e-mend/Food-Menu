<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo/logo.png">
    <title>FOOD-MENU</title>

    <script defer src="<?= $BASE_URL ?>/js/script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

    <link href="<?= $BASE_URL ?>/css/menu.css" rel="stylesheet">
  </head>

  

<body>
    <div class="modal" id="modal_real">
      <div class="space">
              <h2>
              MARMITEX JÁ
              </h2>
              
              <form method="post" name="Pedido" action="action/pedir.php">


              <div class="select" style="width:100%;">
                <select name="colaborador" required>
                      <option selected value="">COLABORADOR</option>

                      <?php while($hor = $full->fetch_array()){ ?>

                          <option valor="<?= $hor['ID'];?>">
                              <?= $hor['NOME'];?>
                          </option>
                          
                          <br>

                      <?php } ?>
                </select>
              </div>

                <div class="ITENS TAMANHO">

                    <?php while($sizes = $size->fetch_array()){ ?>

                      <div class="unit unselectable MARMITEX">
                        
                        <label for="<?= $sizes["ITENS"]; ?>"><?= $sizes["ITENS"]; ?>
                          <input type="radio" id="<?= $sizes["ITENS"]; ?>" value="<?= $sizes["ITENS"]; ?>" name="tamanho">
                        </label>
                      </div>

                    <?php } ?>


                      <br>
                    <div class="completa unselectable">
                        <label for="completaa">MARMITA COMPLETA
                          <input type="checkbox" id="completaa" value="MARMITA COMPLETA" name="MARMITA" checked>
                        </label>
                  </div>

                  </div>
          <div class="separator">
                  <div class="ITENS REMOVIDOS" id="incompletaa">
                    <?php while($eat = $food->fetch_array()){ ?>

                      <div class="unselectable">
                        
                        <label for="<?= $eat["ITENS"]; ?>"><?= $eat["ITENS"]; ?>
                        <input type="checkbox" id="<?= $eat["ITENS"]; ?>" value="<?= $eat["ITENS"]; ?>" name="checkbox[]" checked>
                        </label>
                      </div>

                    <?php } ?>
                    <div class='clear'></div>
                  </div>
                  
                  <div class="ITENS CARNES">
                    <?php while($meats = $meat->fetch_array()){ ?>

                      <div class="unselectable">
                        
                        <label for="<?= $meats["ITENS"]; ?>"><?= $meats["ITENS"]; ?>
                          <input type="radio" id="<?= $meats["ITENS"]; ?>" value="<?= $meats["ITENS"]; ?>" name="carne">
                        </label>
                      </div>

                    <?php } ?>

                    <div class='clear'></div>

                  </div id="marca-x">

                  
                    <img src="logo\marca-x.png">
                  </div>
                      
                <div id="btn">
                  <button type="submit">PEDIR! 😋</button> 
                </div>


              </form>
        </div>
    </div>

      <div class="opener" id="shower">
        <img src="logo/pizza.png">
        <img src="logo/cookies.png">
        <img src="logo/hamburger.png">
        <img src="logo/lemonade.png">
        <img src="logo/meat.png">
        <img src="logo/1538424.png">
        MARMITEX JÁ
        <span>CLIQUE AQUI PARA PEDIR 😋😋😋</span>
      </div>


      <div class="adm-menu">
            <h3><a href="__adm/Controle_Hora/controller.php">MENU ADM</a><h3>

      </div>

      
</body>
</html>