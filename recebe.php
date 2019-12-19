<?php
    include 'servidor.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if($nome == '')
    {
        echo 'O nome não foi preenchido!';
    }else if($email == '')
    {
        echo 'o campo email não foi preenchido!';
    }else{
        echo 'Os dados digitados foram: ', $nome, ' ', $email;
        
        $sql = "INSERT INTO dados (nome, email)
                VALUES ('$nome', '$email')";

    $inserir = mysqli_query($conexao, $sql);
    }


    

?>
<br/>
<a href="index.html">Voltar</a>