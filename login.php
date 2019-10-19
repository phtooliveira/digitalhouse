<?php 
if (isset($_POST['login'])) {
    if ($_POST['email'] == "phto@gmail.com" && $_POST['senha'] == "1234") {
        // echo "Bem vindo";
        header('Location: index.php');
    } else {
        echo "Negado";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="formulario.php">Cadastre-se</a>

    <h1>Bem vindo!</h1>

<form action="" method="post">
<label for="email">E-mail</label>
<input type="email" name="email" id="email">
<label for="senha">senha</label>
<input type="password" name="senha" id="senha">
<input type="submit" value="Entrar" name="login">



</form>

</body>
</html>