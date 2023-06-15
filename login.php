<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form action="post" action="validar.php">
    <input name="usuario" type="email" placeholder="e-mail" required>
    <input name="senha" type="password" placeholder="senha" required maxlength="20">
    <button type="submit">Acessar Sistema</button>
  </form>
</body>
</html>