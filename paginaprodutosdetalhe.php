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
            <a href="paginaprincipal.php"><img src="img/logo.png" alt="Logo do Site ToyStore Brinquedos" id="logo"></a>

            <div id="barra">
                <a href="paginaprincipal.php" class="amarelo" id="empresa">Empresa</a>
                <a href="paginaprodutos.php" class="amarelo" id="produtos">Produtos</a>
                <a href="" class="amarelo" id="contato">Contato</a>
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
                    <strong>R$: <?=$brinque['preço1']?></strong>
                </h4>
                <h4>
                    <?=$brinque['aluguel2']?><br>
                    <strong>R$: <?=$brinque['preço2']?></strong>
                </h4>
                <h4>
                    <?=$brinque['aluguel3']?><br>
                    <strong>R$: <?=$brinque['preço3']?></strong>
                </h4></div>
<div class="botao">
          <a class="branco" href="paginacarrinhos.php?i=<?=$i?>"><!--botao para alugar-->
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
	<!-- FINAL DA PAGINA  -->	
	<footer id="rodape">
		<p class="fim"><br>&copy; 2023 T0YSTORE&trade; - Todos os direitos reservados.</p>
	</footer>
			
</body>
</html>