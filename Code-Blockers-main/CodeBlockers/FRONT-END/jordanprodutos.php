<?php

include('insert-produtos.php');

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Air Jordan</title>
    <link rel="stylesheet" href="stylejordan/jordan.css" />
  </head>
  <body>




  <h1>7SSO QUE É DAORA</h1>




    <script  async src="carrinho.js"></script>

    
    
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

    <nav role="navigation" class="primary-navigation">
    <ul>
      <li><a href="cadastro.php">CADASTRAR</a></li>
      <li><a href="login.php">ENTRAR</a></li>
      <li><a href="home.php">HOME</a></li>
      <li><a href="#">NIKE &dtrif;</a>
        <ul class="dropdown">
          <li><a href="jordanprodutos.php">AIR JORDAN</a></li>
          <li><a href="airforce.php">AIR FORCE</a></li>
          <li><a href="infantil.php">INFANTIL</a></li>
          <li><a href="maisvendidos.php">MAIS VENDIDOS</a></li>
        </ul>
      </li>
      <li><a href="carrinho.php">CARRINHO</a></li>
     
    </ul>
  
  </nav>

    <div class="produtos">
   
    <?php while ($valor = mysqli_fetch_assoc($query)) {?>
    <!-- JORDAN AZUL-->

    <div class="container page-wrapper">
      <div class="page-inner">
        <div class="row">
          <div class="el-wrapper">
            <div class="box-up">
             
                <img
                  class="img"
                  src="<?php echo $valor['imagem']?>"alt="" />
             
                <div class="img-info">
                <div class="info-inner">
                  <span class="p-name"><?php echo $valor['nome']?></span>
                  <span class="p-company"><?php echo $valor['marca']?></span>
                </div>
                <div class="a-size">
                  TAMANHOS DISPONIVEIS :
                  <span class="size">34, 36, 38 </span>
                </div>
              </div>
            </div>

            <div class="box-down">
              <div class="h-bg">
                <div class="h-bg-inner"></div>
              </div>

              <a class="cart" href="#">
                <span class="price">R$<?php echo $valor['preço']?></span>
                <span class="add-to-cart">
                <button class="addCart" >ADICIONAR AO CARRINHO</button>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- container -->
    <?php 

   }; ?>

</div>


 <!--FINAL DA PÁGINA-->

  <footer>
    <div class="footer">
    
    
    <div class="row">
    <ul>
    <li><a href="#">Contact us</a></li>
    <li><a href="#">Our Services</a></li>
    <li><a href="#">Privacy Policy</a></li>
    <li><a href="#">Terms & Conditions</a></li>
    </ul>
    </div>
    
    <div class="row">
    7SSO QUE É DAORA Copyright © 2023 - All rights reserved || Designed By: Roccio
    </div>
    </div>
    </footer>


  </body>
</html>