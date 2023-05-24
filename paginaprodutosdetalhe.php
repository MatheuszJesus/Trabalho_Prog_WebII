<?php

require "dados.php";

if (!isset($_GET["i"])) {
    header("location: paginaprodutos.php");
    die;
}

$prod = $_GET["i"];

if (isset($brinquedos[$prod])) {
    $brinque = $brinquedos[$prod];
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>toystore</title>
</head>
<body>



    <div id="header"><!--MENU-->
            <a href="paginaprincipal.php" ><img src="img/logo.png" alt="Logo do Site ToyStore Brinquedos" id="logo"></a>

            <div id="barra">
                <a href="paginaprincipal.php" class="amarelo" id="empresa">Empresa</a>
                <a href="paginaprodutos.php" class="amarelo" id="produtos">Produtos</a>
                <a href="#areacontato" class="amarelo" id="contato">Contato</a>
                <a href="carrinho.php" class="amarelo" id="carrinho">Carrinho</a>
                <a href="cadastro.php"class="amarelo" id="cadastro">Cadastro</a>
            </div>
    </div>
		
		<div class="brinque2">
            <?php
                if (isset($brinque)) {
            ?>

<div class="blocod">
            <h3><?=$brinque['brinquedo']?></h3>
            <a>
			    <img src="<?=$brinque['foto']?>" alt="<?=$brinque['brinquedo']?>">
            </a>

                <div id=bd ><!--meses e preço-->
                <h4>
                    <?=$brinque['aluguel1']?><br>
                    <strong>R$: <?=$brinque['preço1']?>,00</strong>
                </h4>
                <h4>
                    <?=$brinque['aluguel2']?><br>
                    <strong>R$: <?=$brinque['preço2']?>,00</strong>
                </h4>
                <h4>
                    <?=$brinque['aluguel3']?><br>
                    <strong>R$: <?=$brinque['preço3']?>,00</strong>
                </h4></div>
<div class="botao">
          <a class="branco" href="carrinho.php?"><!--botao para alugar-->
               Alugar agora 
            </a>
                </div>
</div>
            <?php
                }else{
                    echo "<h3>Produto não encontrado.</h3>";
                }
            ?>
		</div>
			<h2 class="h21">DESCRIÇÃO DO BRINQUEDO</h2>
		<p class="p1 "><?=$brinque['funcionamento']?> </p>
        <br><br>

        <div id="areacontato">
        <div id="pt1">
            <h3>Conheça a ToyStore</h3>
            <h3>Perguntas Frequentes</h3>
            <h3>Fale Conosco</h3>
            <h3>Vale Presente</h3>
        </div>
        <div id="pt2">
            <h3>Termos de Uso</h3>
            <h3>Política de Privacidade</h3>
            <h3>Trocas e Devoluções</h3>
        </div>
        <div id="pt3">
            <h3>ToyStore</h3>
            <h3>Aluguel de Brinquedos e <br>Produtos para Bebês em Brumado</h3>
            <h3>IFBA - Brumado, Bahia</h3>
            <h3>Contato: (77) 99999-9999</h3>
        </div>
    </div>
    <div id="logo-redes">
        <img src="img/facebook.png" alt="facebook">
        <img src="img/twitter.png" alt="twitter">
        <img src="img/google.png" alt="google">
    </div>

	<!-- FINAL DA PAGINA  -->	
	<footer id="rodape">
		<p class="fim"><br>&copy; 2023 T0YSTORE&trade; - Todos os direitos reservados.</p>
	</footer>
			
</body>
</html>