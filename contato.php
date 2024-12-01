<?php
    include('conexao.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];    

   $sql = "INSERT INTO contato
                (name, email, phone, message)
           values 
            ('$name','$email', '$phone', '$message')";

    if($conn->query($sql) === TRUE){
        header('Location: cadastro_sucesso.php');     
    } else {    
        exit($sql);
    }

   $conn->close();
?>