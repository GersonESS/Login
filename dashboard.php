<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard Painel De Controle</h1>
<?php
    echo "Usuario {$_SESSION['email']} logado <br>";
?>
</body>
<p>
    <a href="logout.php">Sair</a>
</p>
</html>
