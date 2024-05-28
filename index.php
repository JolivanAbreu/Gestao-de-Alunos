<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <title>Login</title>
</head>

<body>
    <header id="cabeçalho">
        <h1>SGE - Sistema de Gestão Escolar</h1>
    </header>
    <form method="post" action="php/login.php" id="formlogin" name="formlog">
      <div class="acesso">
        <div class="dentro">
          <label for="email">Email</label>
          <input type="text" name="email">
          <label for="email"><abbr title="required"></abbr></label>
          <label for="senha">Senha</label>
          <input type="text" name="senha">
          <label for="senha"><abbr title="required"></abbr></label>
          <input type="submit" class="button" value="Entrar"/><br>
        </div>
      </div>
    </form>
</body>

</html>