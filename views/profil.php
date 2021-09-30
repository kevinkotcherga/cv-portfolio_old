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

        <div class="container-card">

            <div class="card">
              <div class="content-card">
                <h2>1</h2>
                <h3>Qui suis-je ?</h3>
                <p>Je m'appelle Kevin, je suis un développeur en formation à l'école Le Wagon. Mes technologies de predilection sont HTML, CSS, JS, Php, Ruby. Si vous voulez en savoir plus sur moi, je vous invite à me contacter !</p>
              </div>
            </div>

            <div class="card">
              <div class="content-card">
                <h2>2</h2>
                <h3>Pourquoi le développement web ?</h3>
                <p>Le métier de développeur web et en perpétuelle évolution, le besoin de formation est donc constant et c'est ce qui me plaît, on s'ennuie rarement. J'ai pu être confronté à différents problèmes mais ça a toujours été un plaisir d'en trouver les solutions.</p>
              </div>
            </div>

            <div class="card">
              <div class="content-card">
                <h2>3</h2>
                <h3>Centres d'interets</h3>
                <ul>
                  <li>Ingénierie du son, mixage et mastering</li>
                  <li>Création musciale assisté par ordinateur (<a href="https://soundcloud.com/kerga">Cliquez-ici</a>)</li>
                  <li>Bourse et crypto-monnaies</li>
                  <li>Sports</li>
                </ul>
                <h4>Informations</h4>
                <ul class="info">
                    <li>Permis b</li>
                    <li>Disponible sur Paris et sa banlieue</li>
                  </ul>
              </div>
            </div>
          </div>

          <script type="text/javascript" src="../vanilla-tilt.js"></script>
          <script> 
            VanillaTilt.init(document.querySelectorAll(".card"),{
            max: 10,
            speed: 1000,
            glare: true,
            "max-glare": 1,
            });
          </script>

          <!-- MOVING IMAGE-->

          <div class="imgDoodle">
            <img src="../pictures/custom/object.png">
          </div>

          <div class="imgDoodle2">
            <img src="../pictures/custom/object2.png">
          </div>

        <?php include("../php/footer.php"); ?>

      </div>
    </section>
  </body>
</html>