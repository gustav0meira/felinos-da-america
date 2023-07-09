<?php

require "../sql.php";

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];

    // Consultar a tabela de usuários para verificar se o usuário existe
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        
        $row = $result->fetch_assoc();

        $_SESSION['id'] = $row['id'];
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['sobrenome'] = $row['sobrenome'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['telefone'] = $row['telefone'];
        $_SESSION['cargo'] = $row['cargo'];
        $_SESSION['data_nascimento'] = $row['data_nascimento'];
        $_SESSION['cpf'] = $row['cpf'];

        echo '<script>window.location.href="../../painel"</script>';
    } else {
        echo '<script>window.location.href="../../?msg=Usuário incorreto! Verifique e tente novamente."</script>';
    }
}

// Fechar a conexão com o banco de dados
$conn->close();

?>