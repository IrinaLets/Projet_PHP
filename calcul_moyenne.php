<?php

$nom = htmlspecialchars(addslashes(trim($_POST['nom'])));
$email = htmlspecialchars(addslashes(trim($_POST['email'])));
$notePHP = htmlspecialchars(addslashes(trim($_POST['notePHP'])));
$coeffPHP = htmlspecialchars(addslashes(trim($_POST['coeffPHP'])));
$noteMerise = htmlspecialchars(addslashes(trim($_POST['noteMerise'])));
$coeffMerise = htmlspecialchars(addslashes(trim($_POST['coeffMerise'])));
$noteAnglais = htmlspecialchars(addslashes(trim($_POST['noteAnglais'])));
$coeffAnglais = htmlspecialchars(addslashes(trim($_POST['coeffAnglais'])));
$noteFrancais = htmlspecialchars(addslashes(trim($_POST['noteFrancais'])));
$coeffFrancais = htmlspecialchars(addslashes(trim($_POST['coeffFrancais'])));
$noteAlgo = htmlspecialchars(addslashes(trim($_POST['noteAlgo'])));
$coeffAlgo = htmlspecialchars(addslashes(trim($_POST['coeffAlgo'])));
$noteJS = htmlspecialchars(addslashes(trim($_POST['noteJS'])));
$coeffJS = htmlspecialchars(addslashes(trim($_POST['coeffJS'])));
$noteBootstrap = htmlspecialchars(addslashes(trim($_POST['noteBootstrap'])));
$coeffBootstrap = htmlspecialchars(addslashes(trim($_POST['coeffBootstrap'])));
$noteHTML = htmlspecialchars(addslashes(trim($_POST['noteHTML'])));
$coeffHTML = htmlspecialchars(addslashes(trim($_POST['coeffHTML'])));
$noteCSS = htmlspecialchars(addslashes(trim($_POST['noteCSS'])));
$coeffCSS = htmlspecialchars(addslashes(trim($_POST['coeffCSS'])));
$noteWordpress = htmlspecialchars(addslashes(trim($_POST['noteWordpress'])));
$coeffWordpress = htmlspecialchars(addslashes(trim($_POST['coeffWordpress'])));
$noteLaravel = htmlspecialchars(addslashes(trim($_POST['noteLaravel'])));
$coeffLaravel = htmlspecialchars(addslashes(trim($_POST['coeffLaravel'])));





    $totalNotes = ($notePHP * $coeffPHP) + ($noteMerise * $coeffMerise) + ($noteAnglais * $coeffAnglais) + ($noteFrancais * $coeffFrancais) + ($noteAlgo * $coeffAlgo) +
   ( $noteJS * $coeffJS) + ($noteBootstrap * $coeffBootstrap) + ($noteHTML * $coeffHTML) + ($noteCSS * $coeffCSS) + ($noteWordpress * $coeffWordpress) + ($noteLaravel * $coeffLaravel);
   
   $totalCoefficients = ($coeffPHP + $coeffMerise + $coeffAnglais + $coeffFrancais + $coeffAlgo + $coeffJS + $coeffBootstrap + $coeffHTML + $coeffCSS + $coeffWordpress + $coeffLaravel);
    
    $moyenne = ($totalNotes / $totalCoefficients);
    



//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'letsarairinaelie@gmail.com';
    $mail->Password = 'udklogppzhudctph';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
    $message = "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <title>Document</title>
        <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f7f7f7;
      }
      .container {
          background-color: #3498db;
          padding: 20px;
      }
      h1 {
          text-align: center;
          color: #fff;
      }
      table {
          width: 50%;
          margin: 20px auto;
          border-collapse: collapse;
          border: 2px solid blue;
      }
      th, td {
          border: 1px solid blue;
          padding: 8px;
          text-align: center;
          background-color: #fff; /* Intérieur du tableau en blanc */
      }
      th {
          background-color: #f2f2f2;
      }
      tr:nth-child(even) {
          background-color: #e9e9e9;
      }
      .average {
          font-weight: bold;
      }
  </style>
    </head>
    <body>
    <div class='container'>
        <h1>Bulletin de notes de $nom</h1>
        <table>
        <tr>
        <th>Nom/Prénom de l'élève</th>
        <th>$nom</th>
    </tr>
    <tr>
    <th>Adresse e-mail de l'élève</th>
    <th>$email</th>
</tr>
        <tr>
                <th>Matières</th>
                <th>Notes</th>
            </tr>
            <tr>
                <td>PHP</td>
                <td>$notePHP</td>
            </tr>
            <tr>
                <td>Merise</td>
                <td>$noteMerise</td>
            </tr>
            <tr>
                <td>Anglais</td>
                <td>$noteAnglais</td>
            </tr>
            <tr>
                <td>Français</td>
                <td>$noteFrancais</td>
            </tr>
            <tr>
                <td>Algorithme</td>
                <td>$noteAlgo</td>
            </tr>
            <tr>
                <td>Javascript</td>
                <td>$noteJS</td>
            </tr>
            <tr>
                <td>Bootstrap</td>
                <td>$noteBootstrap</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>$noteCSS</td>
            </tr>
            <tr>
                <td>Wordpress</td>
                <td>$noteWordpress</td>
            </tr>
            <tr>
                <td>Laravel</td>
                <td>$noteLaravel</td>
            </tr>
            <tr class='average'>
            <td>Moyenne</td>
            <td>$moyenne</td> 
        </tr>
        </table>
        </div>
    </body>
    </html>";



    


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$mail->setFrom('from@example.com', 'phpmailer');
    $mail->addAddress('letsarairinaelie@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Bulletin de note';
    $mail->Body = $message;
    $mail->send();
   
  
    

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculer la moyenne</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand-logo" href=""><img src="img/logo.jpg" alt="logo" style="max-height: 60px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="display: flex; justify-content: center;">
          <li class="nav-item">
            <a class="nav-link text-primary" href="acceuil.html">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="fonctionnalité.html">Fonctionnalités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="contact.html">Contacts</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-primary" style="background-color: white; border: 1px solid blue; color: blue;"
            href="calculatricemoyenne.html">Calculer la
            moyenne</a>
        </li>
      </ul>
    </div>
  </nav>
  <hr class="my-4">
  <div class="container">
    <div class="d-flex justify-content-center mt-5">
      <h1 class="ml6" style="color: rgb(0, 132, 255);">
        <span class="text-wrapper">
          <span class="letters">Votre moyenne a bien été envoyés</span>
        </span>
      </h1>
    </div>
     <div class="d-flex justify-content-center mt-5">
        <a href="calculatricemoyenne.html" class="btn btn-primary">Retour pour calculer la moyenne</a>
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
  <br>
  <br>
  <br>
  <br> 
  <br>

  <footer class="footer bg-light py-4 text-center">
    <div class="container d-flex justify-content-around align-items-center">
      <span>© 2024 - Ma moyenne</span>
      <img src="img/logo facebook.png" alt="Facebook" class="img-fluid" style="max-height: 30px;">
      <img src="img/logo twitter.png" alt="Twitter" class="img-fluid" style="max-height: 30px;">
      <img src="img/logo instagram.png" alt="Instagram" class="img-fluid" style="max-height: 30px;">
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>
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
