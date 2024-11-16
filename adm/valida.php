<?php

    include "../adm/conexao.php";

    if(isset($_POST['login'])){
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        
        $sql = "select * from usuario where login = '$login'";
        $testeLogin = mysqli_query($conexao,$sql);
        $exite = mysqli_num_rows($testeLogin);

        if($exite){
            $dados = mysqli_fetch_array($testeLogin);
            $hash = $dados['senha'];
            if (password_verify($senha,$hash)){
                $nome = $dados['nome'];
                $nivel = $dados['nivel'];
                $email = $dados['email'];
                $foto = $dados['foto'];

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['login'] = $login;
                $_SESSION['nome'] = $nome;                
                $_SESSION['nivel'] = $nivel;
                $_SESSION['foto'] = $foto;

                if($nivel == 'adm'){
                    header('location: ../adm/adm.php');
                }
                else{
                    header('location: ../index.php');
                }
            }
            else{
              echo "Senha Inválida";  
            }
        }else{
            echo "Usuário não Cadastrado.";
        }
    }

?>