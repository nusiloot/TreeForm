
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link rel="shortcut icon" href="img/favicon.png" />
  <script src="js/script.js"></script>
    <title>TreeForm</title>
</head>


<body>
  <div class="header"><h1>TreeForm<h1></div>
<div class="container">

  <!-- <nav class="navigation">
    <ul>
      <span><php $rows ?></span>
      <li><a href="">Accueil</a></li>
      <li><a href="">Mes documents</a></li>

            <button onclick="Export()" class="btn btn-primary">Export to CSV File</button>
      <li><a href="">Compte</a></li>
      <li><a href="">Aide</a></li>
    </ul>

    <script>
            function Export()
            {
                var conf = confirm("Export users to CSV?");
                if(conf == true)
                {
                    window.open("export.php", '_blank');
                }
            }
        </script>
  </nav> -->


    <div class="create_container">
      <form class="form" method="POST" action="form.php">
        <div id="global_container">
          <div class="box_container">
          <label>Question : </label>
          <input class="question" name="question" type="text" placeholder="Veuillez saisir la question"  required><br>
                  <label>Réponse : </label>
                  <div id='response_container1'>
                    <input class="response" name="reponse" type="text" placeholder="Veuillez saisir la(les) réponse(s) possible(s)"  ><br>
                    <input class="response" name="reponse" type="text" placeholder="Veuillez saisir la(les) réponse(s) possible(s)"  ><br>
                    <input class="response" name="reponse" type="text" placeholder="Veuillez saisir la(les) réponse(s) possible(s)"  ><br>
                    <div class="more more_response"><a onclick="addResponse(this.parentNode.parentNode.id)"><img src="img/add.png"/><span>Ajouter une reponse</span></a></div>
                  </div>
          <hr>
          </div>

        </div>

       <button type="submit" class="btn" name="btn_publish" value="true">Publier</button>
     </form>
     <div>
       <div class="more more_question"><a href="" onclick="addQuestion()"><img src="img/add.png"/><span>Ajouter une question</span></a></div>

     </div>
    </div>
</div>


</body>
</html>
<?php
 ?>
