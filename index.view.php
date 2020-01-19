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

  <h1>Animals</h1>
  <ul>
    <?php foreach ($animals as $animal) { echo "<li>{$animal}</li>"; } ?>
  </ul>

  <h1>Person</h1>
  <ul>
    <?php foreach ($person as $trait => $value) : ?>
      <li><strong><?= $trait; ?>:</strong> <?= $value; ?></li>
    <?php endforeach; ?>
  </ul>

  <h3>Or we can dump with <pre>var_dump()</pre> like this:</h3>
  <pre><?= var_dump($person) ?></pre>
</body>
