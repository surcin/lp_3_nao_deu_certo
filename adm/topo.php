<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="container-fluid bg-dark text-white link-light p-3">
        <div class="row">
            <div class="col text-start">
                INFOLINDOS
            </div>
            <div class="col text-end">
              <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "Bem vindo, $nome | ";
                      if($nivel == 'adm'){
                        echo "<a href='../adm/adm.php'> Admin </a> | ";
                      }
                      echo "<a href='/2151/adm/logout.php'> Logout </a>";
                  }else{
                    echo"
                        <a href='/2151/adm/login.php'> LOGIN </a> |
                        <a href='/2151/usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">