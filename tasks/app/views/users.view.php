<?php require('partials/header.php'); ?>

<h3>Users</h3>

<?php foreach ($names as $name) : ?>
  <li><?= $name->name ?></li>
<?php endforeach; ?>

<h1>Submit your name</h1>

<form method="POST" action="/users">
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
