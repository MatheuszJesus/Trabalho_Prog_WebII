<!DOCTYPE html>
<html lang="pt-br">
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



    <div id="header">
            <a href="paginaprincipal.php"><img src="img/logo.png" alt="Logo do Site ToyStore Brinquedos" id="logo"></a>
            <div id="barra">
                <a href="paginaprincipal.php" class="amarelo" id="empresa">Empresa</a>
                <a href="paginaprodutos.php" class="amarelo" id="produtos">Produtos</a>
                <a href="#areacontato" class="amarelo" id="contato">Contato</a>
                <a href="carrinho.php" class="amarelo" id="carrinho">Carrinho</a>
                <a href="cadastro.php"class="amarelo" id="cadastro">Cadastro</a>
            </div>
    </div>

    <div id="content">
        <div id="conteudopt1">
            <img id ="img-cad"src="img/bebeprinc.png">
        </div>
        <div id="conteudopt2">
            <form action="" method="get">
                    <label id="labels">Nome Completo:<br>
                            <input type="text" id="nome" name="nome" required>
                    </label>
                    <br>
                    <label id="labels">E-mail:<br>
                            <input type="text" id="email" name="email" required>
                    </label>
                    <br>
                    <label id="labels">Senha:<br>
                            <input type="password" id="senha" name="senha" required>
                    </label>
                    <br>
                    <label id="labels">Confirme a senha:<br>
                            <input type="password" id="senha" name="senha" required>
                    </label>
                    <br>
                    <button>REGISTRAR</button>
                </form>
        </div>
    </div>

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
    <footer id="rodape">
		<p class="fim"><br>&copy; 2023 T0YSTORE&trade; - Todos os direitos reservados.</p>
	</footer>

</body>
</html>
