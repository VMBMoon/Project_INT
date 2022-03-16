<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário HTML</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/estilo_vendas.css">
</head>
<body>
<?php include_once("../php/Navbar-menu.php"); ?>
    <form action="enviar-email.php" class="formulario" method="post"> 
        <p> Formulário de Vendas</p>
        <div class="field">
            <label for="nome">Valor de Venda(R$):</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: R$" required>
        </div>
        <div class="field">
            <label for="telefone">CPF:</label>
            <input type="text" id="Valor" name="Valor" placeholder="Ex: 12345678900">
        </div>
        <div class="field">
            <label for="Unidades">Código da Venda:</label>
            <input type="text" id="Unidades" name="Unidades" placeholder="Ex: 0473928302" required>
        </div>  
        <div class="field">
            <label for="nome">Código do Produto:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: 03337" required>
        </div>
        <div class="field">
            <label for="nome">Quantidade de Produtos:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: 2" required>
        </div>
            <br><br>
          </form>
        <div class="field">
            <label for="mensagem">Sua mensagem:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
        </div>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>