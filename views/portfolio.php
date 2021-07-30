<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../sass/css/style.css"/>
  <title>Kevin Kotcherga</title>
</head>

<body class="body">
  <div id="bloc_page">

  <?php include("../php/header.php"); ?>

    <section class="section-portfolio">

      <h1>Portfolio</h1> 

      <h2>Intégrations :</h2>

        <div class="section-portfolio__integration">
          
          <a href="../portfolio-projects/project1-integration-scholarme/index.html">
            <figure>
              <img class="img-integration" src="../pictures/project1-integration-scholarme.png">
                <figcaption>ScholarMe</figcaption>
            </figure>
          </a>

          <a href="../portfolio-projects/project2-integration-card/index.html">
            <figure>
              <img class="img-integration" src="../pictures/project2-integration-card.png">
                <figcaption>Uni</figcaption>
            </figure>
          </a>
        
        </div>

      <h3>Javascript :</h3>

        <div class="section-portfolio__javascript">

          <a class="lien-projet-javascript" href="../portfolio-projects/project3-btnmenu/index.html">
            <figure>
              <img class="img-javascript" src="../pictures/project3-btnmenu.png">
                <figcaption>Menu latéral</figcaption>
            </figure>
          </a>

          <a href="../portfolio-projects/project4-notification/index.html">
            <figure>
              <img class="img-javascript" src="../pictures/project4-notification.png">
                <figcaption>Notifications</figcaption>
            </figure>
          </a>

          <a href="../portfolio-projects/project5-darkmode/index.html">
            <figure>
              <img class="img-javascript" src="../pictures/project5-darkmode.png">
                <figcaption>Dark mode</figcaption>
            </figure>
          </a>

          <a href="../portfolio-projects/project6-test/index.html">
            <figure>
              <img class="img-javascript" src="../pictures/project5-darkmode.png">
                <figcaption>Dark mode</figcaption>
            </figure>
          </a>

        </div>
    </section>

    <?php include("../php/footer.php"); ?>
    
  </body>
</html>