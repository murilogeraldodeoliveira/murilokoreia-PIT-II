<?php
    include('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cel = $_POST['cel'];
    $end = $_POST['end'];
    $nro = $_POST['nro'];
    $comp = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $city = $_POST['city'];
    $estado = $_POST['estado'];
    $estadocivil = $_POST['estadocivil'];
    $sexo = $_POST['sexo'];

   $sql = "INSERT INTO cliente
                (nome, cpf, cel, end, nro, comp, bairro, city, estado, estadocivil, sexo)
           values 
            ('$nome','$cpf', '$cel', '$end', '$nro', '$comp', '$bairro', '$city', '$estado', '$estadocivil', '$sexo')";

    if($conn->query($sql) === TRUE){
        header('Location: cadastro_sucesso.php');     
    } else {        
        exit($sql);
    }

   $conn->close();
?>