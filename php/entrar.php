<?php
include 'conecta.php';

// Verifica se os campos foram enviados
if(isset($_REQUEST['email']) && isset($_REQUEST['senha'])) {
    $user = $_REQUEST['email'];
    $pass = $_REQUEST['senha'];
    
    // Usa prepared statements para evitar SQL injection
    $consulta = "SELECT * FROM usuarios WHERE email=? AND senha=?";
    $stmt = mysqli_prepare($link, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
        $nivel = $dados['nivel'];
        
        // Redireciona com base no nível do usuário
        if ($nivel == "usuario") {
            header("Location: ../aluno/html/aluno/index.php");
        } elseif ($nivel == "operador") {
            header("Location: ../professor/layout/index.php");
        } elseif ($nivel == "administrador") {
            header("Location: ../adm/php/index.php"); // Corrigido o caminho
        } else {
            header("Location: index.html");
        }
        exit(); // Importante após header()
    } else {
        header("Location: ../html/login.html?erro=1");
        exit();
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    header("Location: ../html/login.html?erro=2");
    exit();
}
?>