<?php
  class CategoryController {
    public function index() {
      $products = Category::all();
      require_once('views/category/index.php');
    }

    public function show() {
      if (!isset($_GET['id'])) {
        return call('pages', 'error');
      }

      $category = Category::find($_GET['id']);
      require_once('views/category/show.php');
    }

    public function create() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $category = new category($_POST['category_id'], $_POST['categoryname'], $_POST['categoryactive'], $_POST['categorystatus']);
        $category->save();
        header('Location: index.php?controller=categories&action=index');
      } else {
        require_once('views/category/create.php');
      }
    }

    
public function update() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categories = Category::find($_POST['category_id']);
    $category->setCatgeoryName($_POST['categoryname']);
    $category->setCategoryActive($_POST['categoryactive']);
    $category->setCategoryStatus($_POST['categorystatus']);
    $category->save();
    header('Location: index.php?category=categories&action=index');
  } else {
    if (!isset($_GET['id'])) {
      return call('pages', 'error');
    }
    $category = Category::find($_GET['id']);
    require_once('views/category/update.php');
  }
}


    public function deletecategory() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
    
      // we use the given id to delete the right product
      $category = Category::deletecategory($_GET['id']);
      require_once('views/category/delete.php');
    }
    
    
  }
?>
