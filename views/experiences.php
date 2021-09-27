<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kevin Kotcherga</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../pictures/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../pictures/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../pictures/favicon/favicon-16x16.png">
  <link rel="manifest" href="../pictures/favicon/site.webmanifest">
  <link rel="stylesheet" href="sass/css/style.css">
  <link rel="stylesheet" href="../sass/css/style.css">
  <script src="../main.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body id="body">
    <section>
      <div class="container">

      <?php include("../php/header.php"); ?>

      <div class="container-card__experience">
          <div class="card__experience">
            <div class="content-card__experience">
              <h3>Expériences Professionnelles :</h3>
                <p><span class="titre">Magasinier - CDI</span> </br> (28/08/19 - 31/03/21) </p>
                <p><span class="titre">Ingénieur du son - Auto-entrepeneur</span> </br> (02/06/20 - 01/11/20)</p>
                <p><span class="titre">Projet Muscial - Auto-entrepeneur</span> </br> (02/09/18 - 01/06/20)</p>
                <p><span class="titre">Menuisier Bois - Alternance</span> </br> (01/09/16 - 01/09/18) </p>
                <p><span class="titre">Réceptionniste d'hôtel / Serveur en restauration</span>  (01/09/14 - 31/08/16)</p>
            
            </div>
          </div>

          <div class="card__experience">
            <div class="content-card__experience">
              <h3>Diplômes :</h3>
              <p><span class="titre">OpenClassrooms (2021) :</span> Etude d'html, css, php, javascript, git et gitHub, sass.</p>
              <p><span class="titre">La Machine à Mixer (2019/2020) :</span> Formation MIX 101, MIX Mastercass, Mastering.</p>
              <p><span class="titre">BTP CFA de l’Hérault (11/07/2018) :</span> Menuisier fabricant de menuiserie, mobilier et agencement.</p>
              <p><span class="titre">H&C conseil  (31/08/15) :</span> Serveur en restauration option sommellerie.</p>
              <p><span class="titre">Lycée Louis Feuillade (01/07/14) :</span> Baccalauréat Sciences et technologies du management et de la gestion.</p>
            </div>
          </div>

         
        </div>

        <script type="text/javascript" src="../vanilla-tilt.js"></script>
        <script> 
          VanillaTilt.init(document.querySelectorAll(".card__experience"),{
          max: 5,
          speed: 1000,
          glare: true,
          "max-glare": 1,
	        });
        </script>

        <div class="imgDoodle5">
            <img src="../pictures/custom/object7.png">
          </div>

          <div class="imgDoodle6">
            <img src="../pictures/custom/object6.png">
          </div>

          <div class="imgDoodle7">
            <img src="../pictures/custom/object6.png">
          </div>
               

        <?php include("../php/footer.php"); ?>

      </div>
    </section>
  </body>
</html>
