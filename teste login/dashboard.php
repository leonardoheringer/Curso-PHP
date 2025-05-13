<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Painel</h1>
            <a href="logout.php" class="logout-btn">Sair</a>
        </div>
    </header>

    <main>
        <div class="welcome">
            <h2>Bem-vindo, <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>!</h2>
            <p>Você está logado no sistema.</p>
        </div>
    </main>
</body>
</html>
