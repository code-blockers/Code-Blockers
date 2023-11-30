<?php

if (!isset($_SESSION)) {
   session_start();
   $id =   $_SESSION["email"];
};

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/home.css">
    <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    





<h1><?php echo $id ?></h1>


    
    
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
  


    
 



  <section>
    <div class="container">
        <div class="carousel">
            <input type="radio" name="slides" checked="checked" id="slide-1">
            <input type="radio" name="slides" id="slide-2">
            <input type="radio" name="slides" id="slide-3">
            <input type="radio" name="slides" id="slide-4">
            <input type="radio" name="slides" id="slide-5">
            <input type="radio" name="slides" id="slide-6">
            <ul class="carousel__slides">
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://tse1.mm.bing.net/th?id=OIP.dE8ePEoXPFaVjLugh6IRswHaHa&pid=Api&P=0&h=180" alt="">
                        </div>
                        <figcaption>
                            
                            O brilho perdura no Nike Air Force 1 ’07, o tênis original do basquete que dá um toque de inovação naquilo que você conhece bem: sobreposições costuradas e duráveis, acabamentos simples e a quantidade perfeita de brilho para fazer você se destacar.
                            <span class="credit">AIR FORCE BRANCO</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://tse2.mm.bing.net/th?id=OIP.6WIwjJA7ZwIjZBWhgD8bPAHaEw&pid=Api&P=0&h=180" alt="">
                        </div>
                        <figcaption>
                            Construído com silhueta de cano baixo, o Jordan 1 “White Toe” GS apresenta cabedal feito de couro preto, com biqueiras brancas e Swooshs laterais na cor vermelha.
                            Nas línguas e nos calcanhares, o logotipo wings aparece bordado em vermelho. Sua entressola branca e sola de borracha preta completam o design.
                            <span class="credit">JORDAN 1 LOW ALT INFANTIL VERMELHO E PRETO</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://tse4.mm.bing.net/th?id=OIP.H1IrDSJm0biz-uW0um8HwAHaEc&pid=Api&P=0&h=180" alt="">
                        </div>
                        <figcaption>
                            Inspirado no AJ1 original, essa edição cano médio mantém o visual icônico que você ama, enquanto a escolha de cores e o couro conferem uma identidade distinta.
                            <span class="credit">NIKE AIR JORDAN MID AZUL</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://tse2.mm.bing.net/th?id=OIP.WzrkW3iEvb0wxLecn0gkVAHaEo&pid=Api&P=0&h=180" alt="">
                        </div>
                        <figcaption>
                            O conforto de alto zoom Paris Saint-Germain x Air Jordan 1 ‘Paris’ exibe pops de cores vibrantes em um esquema de cores neutro. A parte superior de camurça off-white é acentuada com sobreposições de nobuck preto e um acabamento iridescente reflexivo no Swoosh cortado. Uma mistura de tons fúcsia e violeta pousa na gola desconstruída e no logotipo clássico da Wings, junto com um emblema circular no calcanhar que reconhece o PSG, o clube de futebol profissional francês. O amortecimento leve chega através de uma entressola de espuma com amortecimento Zoom Air no calcanhar, ambos alojados em um suporte de borracha.
                            <span class="credit">NIKE AIR JORDAN PSG</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://tse1.mm.bing.net/th?id=OIP.ay8wdROJNE7s5C3YR6aD1wHaE8&pid=Api&P=0&h=180" alt="">
                        </div>
                        <figcaption>
                            Sempre fresco e pronto para jogar, o AJ1 de perfil baixo é um dos tênis mais icônicos de todos os tempos. Esta versão incorpora tons naturais e detalhes de suede. É uma renovação marcante para uma lenda arrojada.
                            <span class="credit">NIKE AIR JORDAN CINZA</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://tse1.mm.bing.net/th?id=OIP.-5zI880i-HxP4B1J8k9sdwHaFS&pid=Api&P=0&h=180" alt="">
                        </div>
                        <figcaption>
                            O esplendor vive no Air Force 1 '07 LV8. Cruzando o conforto nas quadras com o estilo fora delas, esses tênis adicionam um toque de estilo astuto a um original do basquete. Materiais mistos e construção dos anos 80 que ecoam a era adicionam nada além de estilo.
                            <span class="credit">AIR FORCE LARANJA</span>                            
                        </figcaption>
                    </figure>
                </li>
            </ul>    
            <ul class="carousel__thumbnails">
                <li>
                    <label for="slide-1"><img src="https://tse1.mm.bing.net/th?id=OIP.dE8ePEoXPFaVjLugh6IRswHaHa&pid=Api&P=0&h=180" alt=""></label>
                </li>
                <li>
                    <label for="slide-2"><img src="https://tse2.mm.bing.net/th?id=OIP.6WIwjJA7ZwIjZBWhgD8bPAHaEw&pid=Api&P=0&h=180" alt=""></label>
                </li>
                <li>
                    <label for="slide-3"><img src="https://tse4.mm.bing.net/th?id=OIP.H1IrDSJm0biz-uW0um8HwAHaEc&pid=Api&P=0&h=180" alt=""></label>
                </li>
                <li>
                    <label for="slide-4"><img src="https://tse2.mm.bing.net/th?id=OIP.WzrkW3iEvb0wxLecn0gkVAHaEo&pid=Api&P=0&h=180" alt=""></label>
                </li>
                <li>
                    <label for="slide-5"><img src="https://tse1.mm.bing.net/th?id=OIP.ay8wdROJNE7s5C3YR6aD1wHaE8&pid=Api&P=0&h=180" alt=""></label>
                </li>
                <li>
                    <label for="slide-6"><img src="https://tse1.mm.bing.net/th?id=OIP.-5zI880i-HxP4B1J8k9sdwHaFS&pid=Api&P=0&h=180" alt=""></label>
                </li>
            </ul>
        </div>
    </div>
</section>

     






 


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