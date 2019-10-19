<?php 
if (isset($_GET['cadastro'])) {
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";

    if($_GET['nome'] == "" ){
        echo "preencha  nome!";
    }
    else if ($_GET['email'] == "") {
        echo "Preencha email";
    }
    else if ($_GET['nascimento'] == "") {
        echo "Preencha nascimento";
    }
    else if ($_GET['senha'] == "") {
        echo "Preencha senha";
    }
    else if ($_GET['senha'] != $_GET['confirmar']) {
        echo "diferentes";
     }
    else {
    echo "sucesso";
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

<a href="login.php">Já tenho um conta</a>

<h1>cadastro de usuario</h1>
<form action="index.php">
<label for="">nome</label>
<input type="text" name="nome" id ="nome" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : null; ?>" >
<label for="">email</label>
<input type="email" name="email" id ="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ""; ?>">
<label for="">data de nascimento</label>
<input type="date" name="nascimento" id ="nascimento" value="<?php echo isset($_GET['nascimento']) ? $_GET['nascimento'] : ""; ?>">
<label for="">Senha</label>
<input type="password" name="senha" id ="senha">
<label for="">confirmar senha</label>
<input type="password" name="confirmar" id ="confirmar">
<input type="submit" name="cadastro" value="enviar" >
</form>
    
</body>
</html>
