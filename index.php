<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTTP Debugging Server</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body onload="getLandingDirectory()">

<div class="header">
  <h1>HTTP Debugging Server</h1>
  <h2>Current Landing Directory</h2>
  <p id="landing_directory">
    <?php include("landingDirectory.php"); ?>
  </p>
</div>
<?php include 'requestheaders.php'; ?>
</body>
</html>