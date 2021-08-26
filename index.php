<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../kevin_kotcherga_cv/sass/css/style.css">
  <script src="../kevin_kotcherga_cv/main.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

  <body id="body">
    <section>
      <div class="container">
        
        <header class="header">
          <div class="header__titre-principale">
            <div class="header__titre-principale-nom">
              <h1>Kevin Kotcherga</h1>
            </div>
            <p class="header__titre-principale-desciption"><span>Développeur web</span></p>
          </div>
          
          <nav class="nav">
            <ul class="nav__ul">
              <li><a class="active" href="/">Accueil</a></li>
              <li><a href="views/profil.php">À propos de moi</a></li>
              <li><a href="views/competences.php">Compétences</a></li>
              <li><a href="views/experiences.php">Expériences</a></li>
              <li><a href="views/portfolio.php">Portfolio</a></li>
              <li><a href="views/contact.php">Contact</a></li>
            </ul>
          </nav>    
        </header>

        <ul class="nav-bar">
          <li><a href="#"><img src="../kevin_kotcherga_cv/pictures/custom/linkedin.png"></a></li>
          <li><a href="#"><img src="../kevin_kotcherga_cv/pictures/custom/github.png"></a></li>
          <li><a href="#"><img src="../kevin_kotcherga_cv/pictures/custom/cv.png"></a></li>
        </ul>

        <div class="content">
          <h2>Bienvenue</h2>
            <p>Je suis un développeur web utilisant html, css, php et javascript. N'hésitez pas à jeter un œil à mes derniers projets dans la section portfolio.</p>

            <a href="../kevin_kotcherga_cv/views/portfolio.php">Portfolio</a>
        </div>

        <div class="imgBx">
          <img src="../kevin_kotcherga_cv/pictures/custom/Saly-38.png">
        </div>

        
        <label class="switch">
          <input type="checkbox" onclick="darkLight()" id="checkBox" >
          <span class="slider"></span>
          <span class="on">ON</span>
          <span class="off">OFF</span>
        </label>

      </div>
    </section>
  </body>
</html>