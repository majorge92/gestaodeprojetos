<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="css/faleConosco.css">
    <script type="text/javascript" src="js/faleConosco.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Fale Conosco</title>
</head>
<body>

    <img src="/img/logomarca.png" class="logo">
    <form id="formUserContato" action="#" method="post">

        <h1>Fale Conosco</h1>

    <p class="nome"> <input type="text" name="nome" placeholder="Informe Nome Completo"> </p>

    <p class="email"> <input type="email" name="email" placeholder="Informe seu E-mail"> </p>

    <p class="assunto"> <input type="text" name="titulo" placeholder="Informe o Título do Assunto" > </p>

    <p class="mensagem"> <textarea name="mensagem" placeholder="Escreva sua Mensagem"></textarea> </p>

    <p class="enviar"> <input type="submit" name="enviar"  onclick="return validacao()" value="Enviar"> </p>

         <p class="voltar"> <a href="menuPrincipal"  name="voltar"   value="voltar"> </p>
    </form>

    </body>
</html>
