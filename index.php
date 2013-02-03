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

$dB = new Database();

$randomCharities = array(6);

for ($i = 0; $i < 5; $i++)
    $randomCharities[$i] = $dB->getRandomCharity();

?>
<!DOCTYPE HTML>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Limelight|Flamenco|Federo|Yesteryear|Josefin Sans|Spinnaker|Sansita One|Handlee|Droid Sans|Oswald:400,300,700"
    media="screen" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" media="screen" rel="stylesheet" type="text/css"
    />
    <link href="css/bootstrap-responsive.css" media="screen" rel="stylesheet"
    type="text/css" />
    <link href="css/fontawesome.css" media="screen" rel="stylesheet" type="text/css"
    />
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"
    />
    <!-- Typekit fonts require an account and a kit containing the fonts used.
    see https://typekit.com/plans for details. <script type="text/javascript"
    src="//use.typekit.net/YOUR_KIT_ID.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
-->
    <title>Charity Brawl</title>
  </head>
  
  <body>

	<div class="nav-home">
        <img class="image  pull-left" src="img/logo-2.png">
        <ul class="nav pull-right">
          <li><a href="<?= $_SERVER['SERVER_NAME']; ?>" class="a-1">Home<br /></a>
          </li>
          <li><a href="charity.php" class="a-1">Charities<br></a>
          </li>
          <li><a href="about.php" class="a-1">About<br></a>
          </li>
        </ul>
    </div>
    <div class="container-fluid container-fluid-1">
      <div class="container container-1">
        <div class="row-fluid">
          <span class="span12">
            <h1 class="heading">Making Giving Fun!
              <br>
            </h1>
            <p class="p-1">and best your friends with your generosity</p>
            <button class="btn btn-large btn-primary">Try it now&nbsp;→</button>
          </span>
        </div>
      </div>
    </div>
    <div class="container container-2">
      <div class="row-fluid">
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[0]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[0]->getShortDescription(); ?></p>
          <img class="image  pull-left" src= <?= $randomCharities[0]->getPhotoFilename(); ?>>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[1]->getCommonName(); ?>
            <br>
          </h2>
          <p class="p-2"><?= $randomCharities[1]->getShortDescription(); ?></p>
          <img class="image  pull-left" src= <?= $randomCharities[1]->getPhotoFilename(); ?>>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[2]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[2]->getShortDescription(); ?></p>
          <img class="image  pull-left" src= <?= $randomCharities[2]->getPhotoFilename(); ?>>
        </span>
      </div>
      <div class="row-fluid">
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[3]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[3]->getShortDescription(); ?></p>
          <img class="image  pull-left" src= <?= $randomCharities[3]->getPhotoFilename(); ?>>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[4]->getCommonName(); ?>
            <br>
          </h2>
          <p class="p-2"><?= $randomCharities[4]->getShortDescription(); ?></p>
          <img class="image  pull-left" src= <?= $randomCharities[4]->getPhotoFilename(); ?>>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[5]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[5]->getShortDescription(); ?></p>
          <img class="image  pull-left" src= <?= $randomCharities[5]->getPhotoFilename(); ?>>
        </span>
      </div>
    </div>
    <div class="container-fluid container-fluid-2">
      <div class="container">
        <div class="row-fluid">
          <span class="span12">
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
          </span>
        </div>
      </div>
    </div>
<style>
	.nav-home {
	  background: none; 
	  clear: none; 
	  border: none;
	  z-index: 1;
	  margin: 0px;
	}
	.nav-home ul {
	  background-color: rgba(0,0,0,0.75);
	  list-style-type: none;
	  font-size: 25px;
	  padding-left: 30px;
	  -webkit-border-bottom-left-radius: 10px;
      -moz-border-bottom-left-border-radius: 10px;
      border-bottom-left-radius: 10px;
	}
	.nav-home li {
	  display: inline-block;
	  padding: 15px 30px 15px 0;
	}
	.nav-home li a {
	  color: white;
	}
	.nav-home .image {
	  height: 150px;
	  padding: 15px;
	}
	.container-fluid.container-fluid-1 {
	  margin: 0px;
	  padding: 0px;
	  max-height: 500px;
    }
	.container-fluid.container-fluid-1 .row-fluid {
	  width: 700px;
	  margin: 50px 0px 0px 0px;
	  padding: 10px 10px 10px 20px;
	  height: 142px;
	  background-color: rgba(0,0,0,0.75);
	  color: white;
	  float: left;
	  -webkit-border-radius: 0 10px 10px 0;
      -moz-border-radius: 0 10px 10px 0;
      border-radius: 0 10px 10px 0;
    }
	.container-fluid.container-fluid-1 .row-fluid .p-1{
	  width: 400px;
	  float: left
    }
	.container-fluid.container-fluid-1 .row-fluid button {
	  float: right;
	  clear: none;
	  margin: 0px 10px 10px 0;	
	}
	div.container-1 {
		margin: 0px;
		padding: 0px;
	}
	
</style>
    
  </body>
  


</html>