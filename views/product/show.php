<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Product Details</title>
</head>
<body>
  <h1>Product Details</h1>
  <p><strong>Product ID:</strong> <?php echo $product->ProductID; ?></p>
  <p><strong>Product Name:</strong> <?php echo $product->ProductName; ?></p>
  <p><strong>Quantity:</strong> <?php echo $product->Quantity; ?></p>
  <p><strong>Rate:</strong> <?php echo $product->Rate; ?></p>
  <p><strong>Active:</strong> <?php echo $product->Active; ?></p>
  <p><strong>Status:</strong> <?php echo $product->Status; ?></p>
  <p><strong>CategoryID:</strong> <?php echo $product->CategoryID; ?></p>
  <br>
</body>
</html>
