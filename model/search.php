<?php
    include_once('connection.php');

    //$where = " periodico=". '""';
    $where = "";

    if($_GET['assunto']!=null){
        $assunto="".$_GET['assunto']."";
        $where = $where . " titulo LIKE '%" . $assunto . "%'";
        $where = $where . " OR palavras_chave LIKE '%" . $assunto . "%'";
        $where = $where . " OR autor like '%" . $assunto ."%'";
    }else{
        $assunto="Título, Resumo, Autor ou Palavra-Chave";
    }
    if($_GET['tipologia']!=null){
        $tipologia="'".$_GET['tipologia']."'";
        
        if($where!=""){$where = $where . "AND";}
        $where = $where . " tipologia=" . $tipologia;

    }
    else{
        $tipologia="";
    }
    if($_GET['area']!=null){
        $area="'".$_GET['area']."'";
        if($where!=""){$where = $where . "AND";}
        $where = $where . "  area_do_conhecimento=" . $area;
    }
    else{
        $area="";
    }
    if($_GET['ano']!=null){
        $ano="'".$_GET['ano']."'";
        if($where!=""){$where = $where . "AND";}
        $where = $where . "  ano=" . $ano;
    }
    else{
        $ano="";
    }

   // echo $where;

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