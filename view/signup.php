<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TreeForm</title>
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link rel="shortcut icon" href="/img/favicon.ico" />
  <script src="js/script.js"></script>
</head>

<body>
  <div class="header">
    <h1>TreeForm<h1>


  </div>
  <div class="container">

    <div class="seconnecter ">

	        <form action="../controleur/authentification.php" method="post">

            <div class="identifiant">
                <input type="text" class="form-control" placeholder="Pseudo">
            </div>

            <div class="email">
                    <input type="text" class="form-control" placeholder="Email">
                </div>

                <div class="mot-de-passe">
                    <input type="password" placeholder="Mot de passe">
                </div>
                <div class="mot-de-passe">
                    <input type="password" placeholder="Confirmer Mot de passe">
                </div>

                <div class="sinscrire">
                    <input type="submit" class="btn btn-success" name="boutsinscrire" value="S'inscrire">
                </div>
	        </form>

        </div>



  </div>
</body>
</html>
