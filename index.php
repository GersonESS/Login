

<?php
// fazer conexão e consulta no banco
$email_BD = "gerson@gmail.com";
$senha_BD = 123;
if (isset($_POST['bt_logar']))
{
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $_SESSION['email'] = $email;
    // verificar se osdados do formulario é = do BD
    if($email == $email_BD && $senha == $senha_BD)
    {
       header('Location: dashboard.php'); 
       
    }
    else
    {
       echo "<p>email ou senha errado</p>"; 
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="index.php" method="POST">
       <label>
            E-mail: 
            <input type="email" name="email"/>
       </label> 
       <label >
            Senha: 
            <input type="password" name="senha" >         
       </label> 
       <button name="bt_logar" type="submit">logar</button>
    </form>
</body>
</html>