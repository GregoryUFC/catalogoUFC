<?php

    include_once('connection.php');

    $where = " periodico=". '""';

    if($_GET['assunto']!=null){
        $assunto="'".$_GET['assunto']."'";
        $where = $where . " AND titulo=" . $assunto;
        $where = $where . " OR palavras_chave=" . $assunto;
        $where = $where . " OR autor=" . $assunto;
    }else{
        $assunto="Título, Resumo, Autor ou Palavra-Chave";
    }
    if($_GET['tipologia']!=null){
        $tipologia="'".$_GET['tipologia']."'";
        $where = $where . " AND tipologia=" . $tipologia;
    }
    else{
        $tipologia="";
    }
    if($_GET['area']!=null){
        $area="'".$_GET['area']."'";
        $where = $where . " AND area_do_conhecimento=" . $area;
    }
    else{
        $area="";
    }
    if($_GET['ano']!=null){
        $ano="'".$_GET['ano']."'";
        $where = $where . " AND ano=" . $ano;
    }
    else{
        $ano="";
    }

    //echo $where;

    $sql='SELECT * FROM geral WHERE' . $where . ';';
    if(mysqli_query($conn, $sql)){
        $query = $conn->query($sql);
        $return = $query->fetch_all();
    }else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }

    if(mysqli_query($conn, $sql)){
        $query = $conn->query($sql);
        $return = $query->fetch_all();
    }else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
?>