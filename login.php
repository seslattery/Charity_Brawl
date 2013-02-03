<?php

/*
 * Title: Charity Brawl
 * Date: 02/02/2013
 * Authors: Corbin Schwalm, Sean Slattery, Aaron Freth, Chris Norys.
 * Version: 1.0
 *
 * This application provides the ability for average internet users to be able
 * to create a custom donation page for their cause. Website visitors are
 * encourged to donated to causes by means of a reward system.
 *
 */

require_once ('includes/functions.php');

if ($_POST['username'] && $_POST['password']) {

    $dB = new Database();

    if ($dB->authenticate('username', 'password') === TRUE) {

        $_SESSION['username'] = $username;

        $_SESSION['key'] = LOGGED_IN_KEY;

        header('Location: index.php');

        exit;
    }

     header('Location: login.php?error=TRUE');

     exit;
}

require_once('header.php');

?>
<body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <img class="image  pull-left" src="css/bootstrap/img/logo.png" alt="Charity Brawl">
        <ul class="nav pull-right">
          <li><a href="#" class="a-1">Home<br></a>
          </li>
          <li><a href="#" class="a-1">Charities<br></a>
          </li>
          <li><a href="#" class="a-1">About<br></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container container-2">

      <div class="row-fluid">
      <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Username</label>
    <div class="controls">
      <input type="text" id="username" name="username" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>

      </div>
    </div>

    <div class="container-fluid container-fluid-2">
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
            <div class="pull-left">
              <p>© AwesomeCo</p>
            </div>
            <ul class="nav nav-pills pull-right">
              <li><a href="#" class="a-2">About</a>
              </li>
              <li><a href="#" class="a-2">Privacy</a>
              </li>
              <li><a href="#" class="a-2">Terms Of Service</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>