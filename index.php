<?php

require 'functions.php';

class Task {
  protected $description;
  public function description() { return $this->description; }

  protected $completed;

  public function __construct($description) {
    $this->description = $description;
    $this->completed = false;
  }

  public function complete() {
    $this->completed = true;
  }

  public function isComplete() {
    return $this->completed;
  }
}

$tasks = [
  new Task('Clean my room'),
  new Task('Finish screencast'),
  new Task('Go to store')
];

$tasks[0]->complete();

require 'index.view.php';
