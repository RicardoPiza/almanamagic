<?php
session_start();
require_once 'connection.php';
  if(isset($_POST['email']) && isset($_POST['password'])){
    $connect = new Connection();
    $st=$connect->conn->prepare("select * from user where email = :em");
    $st->bindValue(":em", $_POST['email']);
    $st->execute();
    $user = $st->fetch();
    if($user <> ""){
      $_SESSION[$_POST['email']];
      $_SESSION[$_POST['password']];
      ?>
      <script>
        window.alert("Welcome");
        window.location.href = "./index.php";
      </script>
    <?php
    
  }
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </head>

  <body>
    <footer class="fav">
      <div class="pure-g">
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages"><img class="nav-icons" src="./asset/home-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages/login.php"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages/favorites.php"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages/logout"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
        </div>
      </div>
    </footer>
    <header>
    <img class="app-logo app-logo-margin-top" src="./asset/logo.png" style="padding-top: 5%;"/>
  </header>
    <div >
      <form id="login-form" class="form" action="login.php" method ="post">
        <input
          type="email"
          id="email"
          name="email"
          placeholder="E-mail"
        /><br /><br />
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Senha"
        /><br /><br />
        <input class="login-button" type="submit" value="Entrar" />
      </form>
      <p class="yellow-text centered">Não possui uma conta? <a href="/almanamagic/html-pages/create-account.php">Clique aqui e crie uma.</a></p>

    </div>
    <div>
      <span><?php 
      require_once 'user.php';
      $user = new User();
      $currentUser = $user->auth();
      echo $_SESSION . $currentUser?></span>
    </div>
  </body>
</html>
