<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'products':
        require_once('models/product.php');
                $controller = new ProductsController();
      break;

      case 'categories':
        require_once('models/category.php');
            $controller = new CategoriesController();
      break;
      case 'users':
        // we need the model to query the database later in the controller
        require_once('models/user.php');
        $controller = new UsersController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages'     => ['home', 'error'],
                       'products' => ['index', 'show', 'update', 'deleteproducts', 'create'],
                       'categories'  => ['index', 'show','delete', 'update', 'create'],
                       'users'     => ['index', 'show', 'delete', 'update', 'create']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
