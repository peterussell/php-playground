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

  <p>
    <ul>
      <li><strong>Name:</strong> <?= $task['title']; ?></li>
      <li><strong>Due Date:</strong> <?= $task['due']; ?></li>
      <li><strong>Assignee:</strong> <?= $task['assigned_to']; ?></li>
      <li><strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?></li>
    </ul>
  </p>


</body>
