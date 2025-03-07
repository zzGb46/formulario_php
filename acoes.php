<?php
include ("conexao.php");

if(isset($_POST['create_usuario'])){
    $nome = $_POST['nome'];
    $email= $_POST['email'];
    $data = $_POST['data_nascimento'];
    $senha= password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO teste(nome, email, data_atual, senha)
    values(
    '$nome',
    '$email',
    '$data',
    '$senha')";

    $query= $mysqli->prepare($sql);
    $query->execute();

    echo'usuario cadastrado';
    header('Location: index.php');
}

// ABAIXO UMA NOVA MANEIRA DE CRIPTOGRAFAR SENHAS ALÉM DO MD5:
// $novaSenha = "minhaNovaSenhaSuperSecreta";

// // Gerando o novo hash da senha
// $novoHashDaSenha = password_hash($novaSenha, PASSWORD_DEFAULT);

// // Armazenando o novo hash no banco de dados
// echo "Novo hash gerado: " . $novoHashDaSenha;