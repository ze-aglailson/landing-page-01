<?php
    require_once("config.php");
    require_once("script.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header class="cabecalho">

        <a href=""><h1 class="logo">Agladev</h1></a>

        <nav class="content-menu">

            <ul class="menu">
                <li><a href="#">Contato</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Produtos</a></li>
            </ul>

        </nav>

    </header>

    <main class="principal-grid">

        <section class="content content-titles">
            <h1 class="title">Aprenda como se tornar um social media</h1>
            <p class="subtitle">
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Illum vel, neque repellat 
                enim animi ab. Laborum ea enim assumenda eius.
            </p>
            <div class="content-btn-acao">
                <button class="btn-acao" id="btn-acao">
                    Obter E-book agora
                </button>
                <div class="form-captura" id="form-captura">
                    <input type="text" name="ipt-nome" id="ipt-nome" placeholder="Qual o seu nome?">
                    <input type="email" name="ipt-email" id="ipt-email" placeholder="E o seu Email?">
                    <button id="btn-enviar"  class="btn-enviar" type="submit">Pronto</button>   
                </div>
                <div id="menssagem" style=" color: green;padding: 7px;font-size: 12px;">
                

                </div>
            </div>
        </section>

        <section class="content content-ilustracao">
            
        </section>
        <section class="content content-sidebar">
            <h1>Area de serviços</h1>
            <p>[Em andamento]<p>
        </section>
    </main>
</body>
</html>