<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sass/css/style.css"/>
  <title>Kevin Kotcherga</title>
</head>

<body class="body">
  <div id="bloc_page">
    <header class="header">
        <div class="header__titre-principale">
           <div class="header__titre-principale-nom">
          <h1>Kevin Kotcherga</h1>
            </div>
          <p class="header__titre-principale-desciption"><span>Intégrateur web</span><span>Développeur web front end</span></p>
        </div>
        
      <nav class="nav">
        <ul class="nav__ul">
          <li><a class="button1" href="index.php">Accueil</a></li>
          <li><a class="button2" href="views/profil.php">À propos de moi</a></li>
          <li><a class="button3" href="views/competences.php">Compétences</a></li>
          <li><a class="button4" href="views/experiences.php">Expériences</a></li>
          <li><a class="button5" href="views/contact.php">Contact</a></li>
        </ul>
      </nav>    
    </header>

    <section class="section-index">
      <nav class="section-index__menu">
        <div class="section-index__menu-item">
          <a href="views/profil.php"class="section-index__menu-item-link">À propos de moi</a>
          <img class="section-index__menu-item_img" src="images/personalisé/kevin-cadre.png" alt="Some image"/>
          <div class="marquee">
            <div class="marquee__inner">
              <span>À propos de moi</span>
              <span>À propos de moi</span>
              <span>À propos de moi</span>
              <span>À propos de moi</span> 
            </div>
          </div>
        </div>

        <div class="section-index__menu-item">
          <a href="views/competences.php" class="section-index__menu-item-link">Compétences</a>
            <img class="section-index__menu-item_img" src="images/personalisé/competences.png" alt="Some image"/>
              <div class="marquee">
                <div class="marquee__inner">
                  <span>Compétences</span>
                  <span>Compétences</span>
                  <span>Compétences</span>
                  <span>Compétences</span>
                </div>
              </div>
        </div>

        <div class="section-index__menu-item">
          <a href="views/experiences.php" class="section-index__menu-item-link">Expériences</a>
            <img class="section-index__menu-item_img" src="images/personalisé/experiences.png" alt="Some image"/>
              <div class="marquee">
                <div class="marquee__inner">
                  <span>Expériences</span>
                  <span>Expériences</span>
                  <span>Expériences</span>
                  <span>Expériences </span>
                </div>
              </div>
        </div>

        <div class="section-index__menu-item">
          <a href="views/contact.php" class="section-index__menu-item-link">Contact</a>
            <img class="section-index__menu-item_img" src="images/personalisé/contact.png" alt="Some image"/>
              <div class="marquee">
                <div class="marquee__inner">
                  <span>Contact</span>
                  <span>Contact</span>
                  <span>Contact</span>
                  <span>Contact</span>
                </div>
              </div>
        </div>
      </nav>
    </section>

      <footer class="footer">
        <p>Télécharger mon cv <a href="docs/cvkotchergakevin.pdf">ici</a><span>Visiter mon <a href="https://github.com/kevinkotcherga/cv-portfolio">github</a></span></p>
        <p class="infos"><a href="docs/ecoindex.csv"><img src="images/personalisé/planet-earth.png" title="GreenIT EcoIndex: 89 Note: A" alt=""></a>©2021 Développer par Kevin <a class="kotcherga" href="https://www.linkedin.com/in/kevin-kotcherga-68b17520a/">Kotcherga</a></p>
      </footer>

    </div>
  </body>
</html>