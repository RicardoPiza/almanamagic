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
    <footer>
      <div class="pure-g">
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages"><img class="nav-icons" src="./asset/home-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages/login.html"><img class="nav-icons-account" src="./asset/account-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages/favorites.php"><img class="nav-icons" src="./asset/favorite-icon.svg" /></a>
        </div>
        <div class="pure-u-1-4">
          <a href="/almanamagic/html-pages/logout"><img class="nav-icons" src="./asset/logout-icon.svg" /></a>
        </div>
      </div>
    </footer>
    <div class="smooth-bg full-height-body">
      <form id="login-form" class="form" action="" method ="post">
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
  </body>
</html>
