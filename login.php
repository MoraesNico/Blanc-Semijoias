<?php
session_start();
include 'mysql/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $dados = $resultado->fetch_assoc();
        $_SESSION["usuario"] = $dados["usuario"];
        $_SESSION["tipo"] = $dados["tipo"];

        if ($dados["tipo"] == "admin") {
            $_SESSION["admin"] = true;
            header("Location: index.php");
            exit();
        } else {
            $_SESSION["admin"] = false;
            header("Location: index.php");
            exit();
        }
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>

<?php include "cabecalho.php"; ?>

<div class="container">
    <h2>Login</h2>
    <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Usuário</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

<?php include 'rodape.php'; ?>