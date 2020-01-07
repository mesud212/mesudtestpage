<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>#1Mesud - Backend</title>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://82894.ict-lab.nl/FRONT2/responsive/style/style.css">
	</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Mesud Mehmed</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/front.php">Front</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/lob.php">Lob</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/beroeps.php">Beroeps</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/skills.php">Skills</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/back2/">Backend</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/logboek.php">Logboek</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link" href="https://82894.ict-lab.nl/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
<div class="mesud">
<?php
	//uitzeten van de foutmeldings voor extra beveiliging
	ini_set("display_errors", 0);
	//controleren of de afzender de pagina https://82894.ict-lab.nl/VEIPRO2/opdracht1_form.php is
if (isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] == "https://82894.ict-lab.nl/VEIPRO2/opdracht1_form.php") {
	//variabelen defeneren en beveilegen aan de hand van de functies: htmlspecialchars, trim, strip_tags en htmlentities
    $Fname = htmlspecialchars(trim(strip_tags(htmlentities($_POST['Vnaam']))));
	$Bname = htmlspecialchars(trim(strip_tags(htmlentities($_POST['Anaam']))));
	$Emi = htmlspecialchars(trim(strip_tags(htmlentities($_POST['Email']))));
	$Date = htmlspecialchars(trim(strip_tags(htmlentities($_POST['Datum']))));
	$Tnum = htmlspecialchars(trim(strip_tags(htmlentities($_POST['Tel']))));
	$Postcode = htmlspecialchars(trim(strip_tags(htmlentities($_POST['Pcode']))));
	$DatePattern = "Y-m-d";
	$TnumPattern = "/[0-9]{2}[0-9]{8}/";
	$PostcodePattern = "/[0-9]{4}[A-Z]{2}|[0-9]{4}[a-z]{2}/";
	//controleren of alle velden aanwezig zijn
	if (isset($Fname) && $Bname && $Emi && $Date && $Tnum && $Postcode){
	//controleren of de eerste variabel leeg is
    if (empty($Fname)) {
        echo "Voornaam veld is leeg !<br>";
    }else{
        echo 'Uw voornaam is: '.ucfirst($Fname);
		echo '<br>';
    }
	//controleren of de twede variabel leeg is
    if (empty($Bname)) {
        echo "Achternaam veld is leeg !<br>";
    }else{
        echo 'Uw achternaam is: '.ucfirst($Bname);
		echo '<br>';
    }
	//controleren of de derde variabel leeg is
    if (empty($Emi)) {
        echo "Email veld is leeg !<br>";
    }else{
	 //controleren of het een echte email is aan de hand van de FILTER_VALIDATE_EMAIL functie
     if (filter_var($Emi, FILTER_VALIDATE_EMAIL)) {
     echo 'Uw email adres is: '.$Emi;
		 echo '<br>';
    }else{
      echo 'Ongeldige email adres !<br>';
       }
    }
	//controleren of de vierde variabel leeg is
    if (empty($Date)) {
        echo "Datum veld is leeg !<br>";
    }else{
		//controleren of het ingevulde date een echte datum is
		if(date($DatePattern, strtotime($Date)) == date($Date)){
			echo 'Uw datum is: '.$Date;
		echo '<br>';
		}else{
		echo 'Ongeldige datum !<br>';
		} 
    }
	//controleren of de vijfde variabel leeg is
    if (empty($Tnum)) {
        echo "Telefoon nummer veld is leeg !<br>";
    }else{
	  //controleren of de ingevulde data een echte telefoon nummer is
		if (preg_match($TnumPattern, $Tnum) == 1){
        echo 'Uw telefoon nummer is: '.$Tnum;
		echo '<br>';
		}else{
		echo 'Ongeldige telefoon nummer!<br>';	
		}
    }
	//controleren of de zesde variabel leeg is
    if (empty($Tnum)) {
        echo "Postcode veld is leeg !<br>";
    }else{
		//controleren of de ingevulde data een echte postcode is
		if (preg_match($PostcodePattern, $Postcode) == 1){
        echo 'Uw postcode is: '.strtoupper($Postcode);
		echo '<br>';
		}else{
		echo 'Ongeldige postcode !<br>';	
		}
    }
	//einde controle van de velden	
    }else{
		echo 'False formulier !';
	}
	//einde controle van de afzender
}else{
echo 'False afzender !';	
}
?>
	<br><br>
	<a href="https://82894.ict-lab.nl/VEIPRO2/opdracht1_form.php" class="btn btn-outline-secondary">Terug naar Opdracht 1</a>
	</div>
	
</header>
	</body>
	</head>
</html>
	

