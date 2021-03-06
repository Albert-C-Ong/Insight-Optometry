<!--
Written by Albert Ong

Created: 2022.07.14
-->

<html>

<head>
<title>Insight Optometry | Appointments</title>
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
      <h1 style="font-size: 55px;">APPOINTMENTS</h1>
      
      <div class="container" style="margin-top: 20px;">
        <div class="row contact-input-row">
          <div class="col-md-3  contact-input-label text-end">
            *name
          </div>
          <div class="col ">
            <input class="col-md-10 contact-input rounded" required>
          </div>
        </div>
        <div class="row contact-input-row">
          <div class="col-md-3 contact-input-label text-end">
            *email
          </div>
          <div class="col">
            <input class="col-md-10 contact-input rounded" type="email" required>
          </div>
        </div>
        <div class="row contact-input-row">
          <div class="col-md-3 contact-input-label text-end">
            phone
          </div>
          <div class="col">
            <input class="col-md-10 contact-input rounded" required>
          </div>
        </div>
        <div class="row contact-input-row">
          <div class="col-md-3 contact-input-label text-end align-top">
            *date
          </div>
          <div class="col">
            <input type="date" min="<?php echo date("Y-m-d"); ?>" required>
          </div>
        </div>
        <div class="row contact-input-row">
          <div class="col-md-3 contact-input-label text-end align-top">
            *time
          </div>
          <div class="col">
            <select name="time" style="width: 150px;">
              <option value="09-00">9:00 AM</option>
              <option value="09-30">9:30 AM</option>
              <option value="10-00">10:00 AM</option>
              <option value="10-30">10:30 AM</option>
              <option value="11-00">11:00 AM</option>
              <option value="11-30">11:30 AM</option>
              <option value="12-00">12:00 PM</option>
              <option value="12-30">12:30 PM</option>
              <option value="01-00">1:00 PM</option>
              <option value="01-30">1:30 PM</option>
              <option value="02-00">2:00 PM</option>
              <option value="02-30">2:30 PM</option>
              <option value="03-00">3:00 PM</option>
              <option value="03-30">3:30 PM</option>
              <option value="04-00">4:00 PM</option>
              <option value="04-30">4:30 PM</option>
              <option value="05-00">5:00 PM</option>
              <option value="05-30">5:30 PM</option>
            </select>
          </div>
        </div>
        <div class="row contact-input-row">
          <div class="col-md-3 contact-input-label text-end align-top">
            alt. date
          </div>
          <div class="col">
            <input type="date" min="<?php echo date("Y-m-d"); ?>" >
          </div>
        </div>
        <div class="row contact-input-row">
          <div class="col-md-3 contact-input-label text-end align-top">
            alt. time
          </div>
          <div class="col">
            <select name="alt-time" style="width: 150px;">
              <option value="09-00">9:00 AM</option>
              <option value="09-30">9:30 AM</option>
              <option value="10-00">10:00 AM</option>
              <option value="10-30">10:30 AM</option>
              <option value="11-00">11:00 AM</option>
              <option value="11-30">11:30 AM</option>
              <option value="12-00">12:00 PM</option>
              <option value="12-30">12:30 PM</option>
              <option value="01-00">1:00 PM</option>
              <option value="01-30">1:30 PM</option>
              <option value="02-00">2:00 PM</option>
              <option value="02-30">2:30 PM</option>
              <option value="03-00">3:00 PM</option>
              <option value="03-30">3:30 PM</option>
              <option value="04-00">4:00 PM</option>
              <option value="04-30">4:30 PM</option>
              <option value="05-00">5:00 PM</option>
              <option value="05-30">5:30 PM</option>
            </select>
          </div>
        </div>
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-3">
          </div>
          <div class="col text-center">
            <input  class="contact-submit-button rounded" type="submit" value="submit" style="margin-top: 30px;">
          </div>
        </div>
      </div>
    </div>

    <div class="col-6" style="margin-top: 20px;">
      <img class="rounded" src="../assets/images/appointments.png" alt="appointments" width="480px">
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
              <img class="navbar-icon phone-icon" src="../assets/images/phone_icon.png" alt="phone"/>
            </div>
            <div class="col-md-10 text-start">
            <a href="tel:4089459277" class="text-decoration-none">(408) 945-9277</a>
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