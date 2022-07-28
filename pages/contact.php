<!--
Written by Albert Ong

Created: 2022.07.13
-->

<?php
if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $from = $_POST["from"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "albert_ong_us@yahoo.com";
  $sender = "messenger@example.com";
  $message = "Message from: $name\r\n\r\n$message";

  $header = "From: $sender" . "\r\n" .
            "Reply-To: $from" . "\r\n" .
            "X-Mailer: PHP" . phpversion();

  $sent = mail($to, $subject, $message, $header);
  
  if ($sent) {
    echo "<script>alert('Your message has been sent')</script>";
  }
  else {
    echo "<script>alert('There was an error when sending your message')</script>";
  }
}
?>

<html>

<head>
<title>Insight Optometry | Contact</title>
<link rel="icon" type="image/png" href="../assets/images/favicon.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../assets/main.css">
<link rel="stylesheet" type="text/css" href="../assets/mobile.css">
</head>    

<body>

<nav class="navbar navbar-expand-xl navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage.html">
      <img class="site-logo" src="../assets/images/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end bg-white rounded" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="text-decoration-none" href="appointments.php">APPOINTMENTS</a>
        </li>
        <li class="nav-item">
          <a class="text-decoration-none" href="resources.html">RESOURCES</a>
        </li>
        <li class="nav-item">
          <a class="text-decoration-none" href="contact.php">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="text-decoration-none" href="about.html">ABOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="h1-contact">WE'D LOVE TO<br>HEAR FROM YOU!</h1>
      
      <form method="POST">
        <div class="container" style="margin-top: 20px;">
          <div class="row contact-input-row">
            <div class="col-md-3  contact-input-label text-end">
              *name
            </div>
            <div class="col ">
              <input class="col-md-10 contact-input rounded" name="name" required>
            </div>
          </div>
          <div class="row contact-input-row">
            <div class="col-md-3 contact-input-label text-end">
              *email
            </div>
            <div class="col">
              <input class="col-md-10 contact-input rounded" type="email" name="from" required>
            </div>
          </div>
          <div class="row contact-input-row"">
            <div class="col-md-3 contact-input-label text-end">
              *subject
            </div>
            <div class="col">
              <input class="col-md-10 contact-input rounded" name="subject" required>
            </div>
          </div>
          <div class="row contact-input-row"">
            <div class="col-md-3 contact-input-label text-end align-top">
              message
            </div>
            <div class="col">
              <textarea class="col-md-10 contact-input contact-input-message rounded"  name="message"></textarea>
            </div>
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col-md-3">
            </div>
            <div class="col text-center">
              <input class="contact-submit-button rounded" type="submit" value="submit" name="submit">
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="col-6">
      <div id="map-container-google-1" class="z-depth-1-half map-container" style="margin-top: 20px;">
        <iframe
          class="rounded"  
          src="https://maps.google.com/maps?q=2050 Concourse Drive&t=&z=13&ie=UTF8&iwloc=&output=embed" 
          frameborder="0"
          width="480px" 
          height="360px"
          style="border:0" 
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</div>
</main>

<nav class = "navbar navbar-default navbar-fixed-bottom">
  <ul class="navbar-nav list-group-horizontal">
    <li class="nav-item-bottom" style="margin-top: 10px;">
      <div class="container">
        <div class="row">
            <div class="col-sm-2 text-end">
              <img class="navbar-icon mail-icon" src="../assets/images/mail_icon.png" alt="mail"/>
              <img class="navbar-icon mail-icon-hover" class="navbar-icon" src="../assets/images/mail_icon_hover.png" alt="mail hover"/>
            </div>
            <div class="col-md-10 text-start">
              <a class="text-decoration-none" href="mailto:insightoptometry@yahoo.com">insightoptometry@yahoo.com</a>
            </div>
        </div>
      </div>
    </li> 
    <li class="nav-item-bottom" style="margin-top: 10px;">
      <div class="container">
        <div class="row">
            <div class="col-sm-2 text-end align-self-center">
              <img class="navbar-icon" src="../assets/images/phone_icon.png" alt="phone"/>
            </div>
            <div class="col-md-10 text-start">
              (408) 945-9277
            </div>
        </div>
      </div>
  </li>
    <li class="nav-item-bottom">
      <div class="container">
        <div class="row">
            <div class="col-sm-2 text-end align-self-center">
              <img class="navbar-icon" src="../assets/images/time_icon.png" alt="schedule"/>
            </div>
            <div class="col-md-10 text-start">
            Wed-Thu: 9:00 AM - 6:00 PM<br>Sun: 10:00 AM - 4:00 PM
            </div>
        </div>
      </div>
    </li>
    <li class="nav-item-bottom">
      <div class="container">
        <div class="row">
            <div class="col-sm-2 text-end align-self-center" style="margin-top: 5px;">
              <img class="navbar-icon location-icon" src="../assets/images/location_icon.png" alt="location"/>
              <img class="navbar-icon location-icon-hover" src="../assets/images/location_icon_hover.png" alt="location hover"/>
            </div>
            <div class="col-md-10 text-start">
              <a class="text-decoration-none" href="https://www.google.com/maps?hl=en&q=2050+concourse+drive" target="_blank">2050 Concourse Drive<br>San Jose, CA 95131</a>
            </div>
        </div>
      </div>
    </li>
  </ul>
</nav>

</body>

</html>