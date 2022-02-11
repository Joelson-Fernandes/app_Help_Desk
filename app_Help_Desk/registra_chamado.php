<?php
    session_start();
    //caso aja '#' no texto, transforma em '-'
    $_POST = str_replace('#', '-', $_POST);

    //junto todo array em uma unica string
    $texto = $_SESSION['id'] . '#' . implode('#', $_POST) .   PHP_EOL;

    echo($texto);

    //abrindo arquivo
    $arquivo = fopen('../../app_help_desk_private/arquivo.hd','a');
    //montando texto
    fwrite($arquivo, $texto);
    //fechando arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>