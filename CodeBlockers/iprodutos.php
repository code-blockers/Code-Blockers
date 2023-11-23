<?php

include('insert-produtos.php');

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mais Vendidos</title>
    <link rel="stylesheet" href="style jordan/jordan.css" />
  </head>
  <body>


    <script  async src="carrinho.js"></script>

    
    
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

    <nav role="navigation" class="primary-navigation">
      <ul>
        <li><a href="#">CADASTRAR</a></li>
        <li><a href="#">ENTRAR</a></li>
        <li><a href="#">NIKE &dtrif;</a>
          <ul class="dropdown">
            <li><a href="#">AIR JORDAN</a></li>
            <li><a href="#">DUNK</a></li>
            <li><a href="#">JORDAN</a></li>
            <li><a href="#">INFANTIL</a></li>
          </ul>
        </li>
        <li><a href="#">CARRINHO</a></li>
       
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
                <span class="price"><?php echo $valor['preço']?></span>
                <span class="add-to-cart">
                  <span class="txt">ADICIONAR AO CARRINHO</span>
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