<?php
  class UserController {
    public function index() {
      $users = User::all();
      require_once('views/user/index.php');
    }

    public function show() {
      if (!isset($_GET['id'])) {
        return call('pages', 'error');
      }

      $user = User::find($_GET['id']);
      require_once('views/user/show.php');
    }

    public function create() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = new user($_POST['user_id'], $_POST['password'], $_POST['username']);
        $category->save();
        header('Location: index.php?controller=users&action=index');
      } else {
        require_once('views/user/create.php');
      }
    }

    
public function update() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users = User::find($_POST['user_id']);
    $user->setPassword($_POST['password']);
    $user->setUsername($_POST['username']);
    $category->save();
    header('Location: index.php?category=users&action=index');
  } else {
    if (!isset($_GET['id'])) {
      return call('pages', 'error');
    }
    $user = User::find($_GET['id']);
    require_once('views/user/update.php');
  }
}


    public function deleteuser() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
    
      // we use the given id to delete the right product
      $user = User::deleteuser($_GET['id']);
      require_once('views/user/delete.php');
    }
    
    
  }
?>
