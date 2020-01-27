<?php

class UsersController {
  public function index() {
    $users = App::get('database')->selectAll('names');
    return view('users', ['names' => $users]);
  }

  public function store() {
    App::get('database')->insert('names', [
      'name' => $_POST['name']
    ]);

    // Redirect to the users page
    return redirect('users');
  }
}
