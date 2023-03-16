<?php
        require "./read.php";
        $users = read();
        $user0 = $users[0]->login;
          $senha0 = $users[0]->senha;
        $user1 = $users[1]->login;
          $senha1 = $users[1]->senha;
        $user2 = $users[2]->login;
          $senha2 = $users[2]->senha;
        $user3 = $users[3]->login;
          $senha3 = $users[3]->senha;
        $user4 = $users[4]->login;
          $senha4 = $users[4]->senha;
    

    $senhafixa = $_POST['senha'];
    $usuariofixo = $_POST['email'];

  if ($user0 == $usuariofixo && $senha0 == $senhafixa or $user1 == $usuariofixo && $senha1 == $senhafixa or $user2 == $usuariofixo && $senha2 == $senhafixa or $user3 == $usuariofixo && $senha3 == $senhafixa or $user4 == $usuariofixo && $senha4 == $senhafixa){
    require './inicio.php';
  }
    
  else {
    require './erro.php';
  }
    
?>

