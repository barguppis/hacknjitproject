<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0";>
  <title>notAutoEnum</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
</head>
<body>
  <section class="page-title">notAutoEnum</section>
  <section class="action-list">
    <a href="/subdomains.php" class="card">
      <div class="card-head"><i class='material-icons'>list</i></div>
      <div class="card-body">Enumerate Subdomains with wfuzz / sublist3r</div>
    </a>
    <a href="/nmap.php" class="card">
      <div class="card-head"><i class='material-icons'>search</i></div>
      <div class="card-body">Scan Found Hosts with Nmap</div>
    </a><a href="/eyewitness.php" class="card">
      <div class="card-head"><i class='material-icons'>photo</i></div>
      <div class="card-body">Pull Images from Front Page of Webpages of Found Hosts</div>
    </a><a href="/responder.php" class="card">
      <div class="card-head"><i class='material-icons'>security</i></div>
      <div class="card-body">LLMNR/NBT-NS Poisoning with Automatic Password cracking</div>
    </a>
    <a href="/install.php" class="card">
      <div class="card-head"><i class='material-icons'>get_app</i></div>
      <div class="card-body">Install Necessary Dependencies</div>
    </a>

  </section>
  <section class="footer">
    <a href="/about.php" class="footer-btn">About</a>
    <form action="/index.php" method="post" id="exit-btn" class="footer-btn">
  	  <input type="submit" name="Exit" value="Exit"/>
    </form>
  </section>
</body>
<?php
if ($_POST['Exit'] == 'Exit') {
system("kill $(ps aux | grep -i php | awk '{print $2}')");
}
?>
