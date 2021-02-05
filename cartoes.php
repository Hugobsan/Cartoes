<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cartões</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script> /* Confirmador de Saída */
    function confirmar(url){
      event.preventDefault();  
      var resposta = confirm("Deseja mesmo excluir esse cartão?");
      if (resposta == true){
        window.location.href = url;
      }
      }
    </script>    
  
  </head>
  <body>
    <?php 
      require_once('00 - BD/bd_conexao.php');	
      $sql = " SELECT id, numero_cartao, cod_sec, validade, nome, cpf FROM cartoes ORDER BY id ASC";
      $resultado = $con->query($sql);
    ?>
    <div class="col-8">
      <h1>Seus Cartões</h1><br>
      <table class="table table-striped"> 
        <thead>
          <tr class="bg-primary">
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Numero do Cartão</th>
              <th scope="col">Cod. Segurança</th>
              <th scope="col">Validade</th>
              <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
        while ($infoCartao = mysqli_fetch_object($resultado)) { ?>
          <tr class="linhaTabela">
            <th scope="row"><?php echo $infoCartao->id; ?></th>
            <td> <?php echo $infoCartao->nome; ?></td>
            <td> <?php echo $infoCartao->cpf; ?></td>
            <td> <?php echo $infoCartao->numero_cartao; ?></td>
            <td> <?php echo $infoCartao->cod_sec; ?></td>
            <td> <?php echo $infoCartao->validade; ?></td>
            <td>
                <a href="excluirCliente.php?id=<?php echo $infoCartao->id; ?>" onclick="confirmar('excluirCartao.php?id=<?php echo $infoCartao->id; ?>')"> <img src="imgs/excluir.png" alt="Excluir" style="width:30px;"> </a>
            </td>            
          </tr>
          <?php
              } //while
              ?>

        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>