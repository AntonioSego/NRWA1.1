<?php
  class ProductController {
    public function index() {
      $products = Product::all();
      require_once('views/product/index.php');
    }

    public function show() {
      if (!isset($_GET['id'])) {
        return call('pages', 'error');
      }

      $product = Product::find($_GET['id']);
      require_once('views/product/show.php');
    }

    public function create() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $product = new product($_POST['product_id'], $_POST['product_name'], $_POST['quantity'], $_POST['rate'], $_POST['active'], $_POST['status'], $_POST['categoryID']);
        $product->save();
        header('Location: index.php?controller=products&action=index');
      } else {
        require_once('views/product/create.php');
      }
    }

    
public function update() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $products = Product::find($_POST['product_id']);
    $product->setProductName($_POST['product_name']);
    $product->setQuantity($_POST['quantity']);
    $product->setRate($_POST['rate']);
    $product->setActive($_POST['active']);
    $product->setStatus($_POST['status']);
    $product->setCategoryid($_POST['categoryID']);
    $product->save();
    header('Location: index.php?product=products&action=index');
  } else {
    if (!isset($_GET['id'])) {
      return call('pages', 'error');
    }
    $product = Product::find($_GET['id']);
    require_once('views/product/update.php');
  }
}


    public function deleteproduct() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
    
      // we use the given id to delete the right product
      $product = Product::deleteproduct($_GET['id']);
      require_once('views/product/delete.php');
    }
    
    
  }
?>
