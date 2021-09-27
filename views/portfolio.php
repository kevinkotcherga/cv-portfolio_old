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

      <div class="container-card__portfolio">
          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project1-auto-text/index.html">
                  <img class="img-integration" src="../pictures/project1-auto-text.jpg">
                    <figcaption>Auto text</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project2-integration-card/index.html">
                <figure>
                  <img class="img-integration" src="../pictures/project2-integration-card.png">
                    <figcaption>Uni</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a class="lien-projet-javascript" href="../portfolio-projects/project3-btnmenu/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project3-btnmenu.jpg">
                    <figcaption>Menu latéral</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project4-notification/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project4-notification.jpg">
                    <figcaption>Notifications</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project5-darkmode/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project5-darkmode.jpg">
                    <figcaption>Dark mode</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project7-quiz/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project7-quiz.jpg">
                    <figcaption>Quiz</figcaption>
                </figure>
              </a>
            </div>
          </div>

        </div>

        <script type="text/javascript" src="../vanilla-tilt.js"></script>
        <script> 
          VanillaTilt.init(document.querySelectorAll(".card__portfolio"),{
          max: 20,
          speed: 1000,
          glare: true,
          "max-glare": 1,
	        });
        </script>
               
          <div class="imgDoodle8">
            <img src="../pictures/custom/object8.png">
          </div>

          <div class="imgDoodle9">
            <img src="../pictures/custom/object9.png">
          </div>      

        <?php include("../php/footer.php"); ?>

      </div>
    </section>
  </body>
</html>