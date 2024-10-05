<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cadastro_funcionarios";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['sobrenome']);
$idade = intval($_POST['idade']);
$email = trim($_POST['email']);
$celular = trim($_POST['celular']);
$principal = $_POST['principal'] === 'Sim' ? 'Sim' : 'Não';
$corporativo = $_POST['corporativo'] === 'Sim' ? 'Sim' : 'Não';
$whatsapp = $_POST['whatsapp'] === 'Sim' ? 'Sim' : 'Não';


if (empty($nome) || empty($sobrenome) || empty($idade) || empty($email) || empty($celular)) {
    echo "Todos os campos são obrigatórios!";
    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido!";
    exit;
}

$stmt = $conn->prepare("INSERT INTO funcionarios (nome, sobrenome, idade, email, celular, principal, corporativo, whatsapp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("ssisssss", $nome, $sobrenome, $idade, $email, $celular, $principal, $corporativo, $whatsapp);


if ($stmt->execute()) {
    echo "Novo registro criado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
