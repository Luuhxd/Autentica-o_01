<?php
    

    require './read.php';
    $users = read();

    echo $users[0]->login . "<br>";
    echo $users[0]->senha . "<br>";
    //echo '<br>';
    //echo $users[1]->login . "<br>";
    //echo $users[1]->senha . "<br>";
    //echo '<br>';
    //echo $users[2]->login . "<br>";
    //echo $users[2]->senha . "<br>";
    //echo '<br>';
    //echo $users[3]->login . "<br>";
    //echo $users[3]->senha . "<br>";
    //echo '<br>';
    //echo $users[4]->login . "<br>";
    //echo $users[4]->senha . "<br>";
    
    //var_dump($users);
    
?>
  <link rel="stylesheet" href="style.css">
  <div class="login-box">
    <head>
  <link rel="stylesheet" href="style.css">
</head>
  <h1>Login</h1>
  <form action="./ler.php" method="post">
    <div class="">
        <input name="email" id="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">E-mail</label>
      
    </div>
    <div class="user-box">
      <input id="senha" type="password" name="senha" required="">
      <label>Senha</label>
    </div>
    <select name="select">
      <option value="valor2" selected>Cargo</option>
  <option value="valor1">Adm</option>
  <option value="valor3">Cliente</option>
</select>
            <div class="justify-center">
                <button>Entrar</button>
            </div>
  </form>
</div>


