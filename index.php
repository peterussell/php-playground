<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Get some!!!</title>
  <style>
    header {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <h1>
      <?php
        $name = $_GET['name'];
        echo "hey {$name} -- I want you to GET SOME";
      ?>
    </h1>
  </header>
</body>
