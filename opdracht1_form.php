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
<form action="opdracht1_verwerk.php" method="post"> 
Voornaam: <input class="form-control" type="text" id="Vnaam" name="Vnaam" style="text-transform: capitalize;" required>
Achternaam: <input class="form-control" type="text" id="Anaam" name="Anaam" style="text-transform: capitalize;" required>
Email: <input class="form-control" type="email" id="Email" name="Email" required>
Datum: <input class="form-control" type="date" id="Datum" name="Datum" required>
Telefoonnummer: <input class="form-control" id="Tel" name="Tel" type="tel" pattern="[0-9]{2}[0-9]{8}" name="Tnummer" required>	
Postcode: <input class="form-control" type="text" pattern="[0-9]{4}[A-Z]{2}|[0-9]{4}[a-z]{2}" id="Pcode" name="Pcode" style="text-transform:uppercase" required><br>
	<input class="btn btn-outline-secondary" type="submit">
</form><br>

	
	</div>
	
</header>
	</body>
	</head>
</html>
	

