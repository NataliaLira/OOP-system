<?php
//se a varial global estiver vazia, o PHP entende ela com FALSE.
    if($_REQUEST){
        $pessoa = $_REQUEST['pessoa'];
    } else {
        header("Location:index.php?Pessoas");
    }
?>

<h1>Olá <?php echo $pessoa->getNome(); ?> VOCÊ FOI CADASTRADO COM SUCESSO!</h1>