<?php

class Task {
  protected $description;
  public function description() { return $this->description; }

  protected $completed;

  public function isComplete() {
    return $this->completed;
  }
}
