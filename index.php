<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Moyenne</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>.ml6 {
        position: relative;
        font-weight: 900;
        font-size: 3.3em;
      }
      
      .ml6 .text-wrapper {
        position: relative;
        display: inline-block;
        padding-top: 0.2em;
        padding-right: 0.05em;
        padding-bottom: 0.1em;
        overflow: hidden;
      }
      
      .ml6 .letter {
        display: inline-block;
        line-height: 1em;
      }</style>
</head>

<body class="bg-light p-3">

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand-logo" href="#"><img src="img/logo.jpg" alt="logo" style="max-height: 60px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto" style="display: flex; justify-content: center;">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="fonctionnalité.php">Fonctionnalités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="contact.php">Contacts</a>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary"
                        style="background-color: white; border: 1px solid blue; color: blue;"
                        href="calculatricemoyenne.php">Calculer la
                        moyenne</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Ligne horizontal en dessous du navbar -->
    <hr class="my-4">
    <!-- Contenu principal -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="ml6" style="color: rgb(0, 132, 255);">
                    <span class="text-wrapper">
                      <span class="letters">Calculez la moyenne en un clic</span>
                    </span>
                  </h1>
                <p>Ma moyenne est une application web simple mais efficace conçue pour faciliter la vie des élèves et
                    des professionnels de l'enseignement. A l'aide de données saisies au cœur de celle-ci, cette
                    application vous délivre la note moyenne avec efficacité et rapidité.</p>
                <p>Chaque module de cette application est pensé pour en favoriser la prise en main et visualiser
                    instantanément votre moyenne cumulative.</p>
                <a href="fonctionnalité.html" class="btn btn-primary">En savoir plus</a>

                <a href="calculatricemoyenne.html" class="btn btn-secondary">Calculer la moyenne</a>
            </div>
            <div class="col-md-6">
                <img src="img/banniere.png" alt="Illustration">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Footer -->
    <hr>
    <footer class="footer bg-light py-4 text-center">
        <div class="container d-flex justify-content-around align-items-center">
            <span>© 2024 - Ma moyenne</span>
            <img src="img/logo facebook.png" alt="Facebook" class="img-fluid" style="max-height: 30px;">
            <img src="img/logo twitter.png" alt="Twitter" class="img-fluid" style="max-height: 30px;">
            <img src="img/logo instagram.png" alt="Instagram" class="img-fluid" style="max-height: 30px;">
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>// Wrap every letter in a span
    var textWrapper = document.querySelector('.ml6 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
      .add({
        targets: '.ml6 .letter',
        translateY: ["1.1em", 0],
        translateZ: 0,
        duration: 750,
        delay: (el, i) => 50 * i
      }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });</script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

</html>