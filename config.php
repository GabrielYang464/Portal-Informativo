<?php

    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
    }

    $host = "localhost";
    $banco = "feedback";
    $user = "root";
    $user_senha = "";

    $conexao = mysqli_connect($host, $user, $user_senha, $banco);

    if(!$conexao){
        die("Falha na conexão: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO relatorio (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script>alert('Mensagem enviada com sucesso! Obrigado por entrar em contato.'); 
        window.location.href = 'contato.html';
        </script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem: " . mysqli_error($conexao) . "');
        window.history.back();
        </script>";
    }
?>