<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css"
      integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <img class="app-logo" src="./asset/logo.png" />
    </header>

    <div class="smooth-bg full-height-body">
      <form class="login-form" action="">
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
        <input type="submit" value="Entrar" />
      </form>
    </div>

    <footer>
      <div class="pure-g">
        <div class="pure-u-1-4">
          <a href="index.php"><img class="nav-icons" src="./asset/home-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="login.php"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="favorites.php"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="logout"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
        </div>
      </div>
    </footer>
  </body>
</html>
