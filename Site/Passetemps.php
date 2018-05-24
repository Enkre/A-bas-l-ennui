<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- titre provisoire -->
	<title>PasseTemps</title>
</head>
<body>


	
	<figure>
	<!--	<img src="images/banniere2.jpg" alt="banniere du site"/> -->
	</figure>
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
	<p><h1>2ème étape</h1> </p>
  <p><h2>Nous disposons de <?php echo $_POST['minutes']; ?> minutes</h2></p>

	<p>Nous te proposons des activités, de l'actualité et les tendances atuelles en fonction du temps dont tu disposes ! En fonction de tes centres d'intérets<p>

	<p><h3>Choisis parmis ces activités</h3>

<form method="post" action="interets.php">

<input type="checkbox" name="Musiques"/><label for="Musiques">Musiques</label><br />
<input type="checkbox" name="Jeux"/><label for="Jeux">Jeux</label><br />
<input type="checkbox" name="Actualité"/><label for="Actualité">Actualité</label><br />
<input type="checkbox" name="Divertissement"/><label for="Divertissement">Divertissement</label><br />
<input type="checkbox" name="Sorties"/><label for="Sorties culturelles">Sorties culturelles</label><br />


<input type="submit" value="validez"/>
 </form></p>

<ul class="pager">
   
   <li class="previous"><a href="minutes.html">Précédent</a></li>

</ul>
	

</body>
<footer>
</footer>
</html>
