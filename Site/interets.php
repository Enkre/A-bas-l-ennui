<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>Interet</title>
</head>


<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Accueil.html">🍍</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Accueil.html">Accueil</a></li>
        <li><a href="principe.html">A propos</a></li>
        <li><a href="minutes.html">Projet</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="compte.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<h1>3ème étape</h1>

<h2>Affine tes centres d'intérets</h2>

<?php 
if(isset($_POST['Musiques']) and $_POST['Musiques']=='on')
{
  ?>

	<form method="post" action="propositions.php">

<h3>Musiques</h3>

<p>Choisis ici le style de musique qui te plait: </br>

    <input type="radio" name="musiques" value="Rap" id="Rap" /> <label for="Rap">Rap</label><br />
    <input type="radio" name="musiques" value="Rock" id="Rock" /> <label for="Rock">Rock</label><br />
    <input type="radio" name="musiques" value="Reggae" id="Reggae" /> <label for="Reggae">Reggae</label><br />
    <input type="submit" value="validez"/>
</p>
	</form>

<?php

}


if(isset($_POST['Jeux']) and $_POST['Jeux']=='on')
{
  ?>
<h3>Jeux</h3>		
	
	<form method="post" action="propositions.php">

<p>Tu souhaites jouer un peu ou même te lancer dans une aventure notre rubrique ici te propose ce dont tu as besoin: </br>

    <input type="radio" name="jeux" value="Jeux Online" id="Jeux Online" /> <label for="Jeux Online">Jeux en ligne</label><br />
    <input type="radio" name="jeux" value="Stream" id="Stream" /> <label for="Stream">Stream</label><br />
    <input type="submit" value="validez"/>
</p>
	</form>
<?php
}

if(isset($_POST['Actualité'])and $_POST['Actualité']=='on')
{
  ?>
<h3>Actualité</h3>

	<form method="post" action="propositions.php">
	
<p>Toute l'actualité et les news du moment sont ici: </br>
	
	  <input type="radio" name="actualité" value="Presses" id="Presses" /> <label for="Presses">Presses</label><br />
    <input type="radio" name="actualité" value="Radio" id="Radio" /> <label for="Radio">Radio</label><br />
    <input type="radio" name="actualité" value="Sport" id="Sport" /> <label for="Sport">Sport</label><br />
    <input type="submit" value="validez"/>
	
	
</p>
	</form>
<?php
}

if(isset($_POST['Divertissement']) and $_POST['Divertissement']=='on')
{
  ?>

<h3>Divertissement</h3>

	<form method="post" action="propositions.php">
	
<p>Si tu cherches un bon divertissement passe par là, nous référençons les plus grands classiques de la littérature et les plus grandes réalisations du 7ème art</br>	
	<input type="radio" name="divertissement" value="Film" id="Film" /> <label for="Film">Film</label><br />
    <input type="radio" name="divertissement" value="Série" id="Série" /> <label for="Série">Série</label><br />
    <input type="radio" name="divertissement" value="Lecture" id="Lecture" /> <label for="Lecture">Lecture</label><br />
    <input type="submit" value="validez"/>
</p>
	
	</form>

<?php
}

if(isset($_POST['Sorties'])and $_POST['Sorties']=='on')
{
  ?>

<h3>Sorties</h3>
	
	<form method="post" action="propositions.php">

	<p>Sortir pret de chez toi on te propose plusieurs activités en région Parisienne: </br>
	<input type="radio" name="sorties" value="Sorties culturelles" id="Sortie culturelles" /> <label for="Sorties culturelles">Sorties Culturelles</label><br />
    <input type="radio" name="sorties" value="Concert" id="Concert" /> <label for="Concert">Concert</label><br />
	<input type="submit" value="validez"/>
	</p>

    </form>
<?php
}

?>

<ul class="pager">


</ul>
</body>
</html>