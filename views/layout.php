<html>
  <body>
<style>
header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
  }

  header a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    margin-right: 20px;
  }

  header a:hover {
    text-decoration: underline;
  }

  main {
    padding: 20px;
  }

  footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
  }
</style>

</head>
  <body>
    <header>
      <a href='./'>Početna</a>
      <a href='?controller=product&action=index'>Products</a>
      <a href='?controller=category&action=index'>Category</a>
      <a href='?controller=user&action=index'>User</a>
    </header>

    <main>
  <?php require_once('routes.php'); ?>
</main>

<footer>
  Copyright &copy; <?php echo date('Y'); ?>
</footer>

</body>
</html>