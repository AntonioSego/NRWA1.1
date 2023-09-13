<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Product List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      margin-top: 50px;
      margin-bottom: 30px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 800px;
      margin: auto;
      margin-bottom: 50px;
    }
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    a {
      text-decoration: none;
      color: #000;
    }
    .actions {
      display: flex;
      justify-content: center;
    }
    .actions a {
      margin-right: 10px;
    }
    @media screen and (max-width: 600px) {
      th, td {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <h1>Products List</h1>
  <table>
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Rate</th>
      <th>Active</th>
      <th>Status</th>
      <th>CategoryID</th>
    </tr>
    <?php foreach($products as $product) { ?>
    <tr>
      <td><?php echo $product->ProductID; ?></td>
      <td><?php echo $product->ProductName; ?></td>
      <td><?php echo $product->Quantity; ?></td>
      <td><?php echo $product->Rate; ?></td>
      <td><?php echo $product->Active; ?></td>
      <td><?php echo $product->Status; ?></td>
      <td><?php echo $product->CategoryID; ?></td>
      <td class="actions">
        <a href="?controller=products&action=show&id=<?php echo $product->ProductID; ?>">Show</a>
        <a href="?controller=products&action=update&id=<?php echo $product->ProductID; ?>">Update</a>
        <a href="?controller=products&action=deleteproduct&id=<?php echo $product->ProductID; ?>">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <div style="text-align: center;">
    <a href="?controller=products&action=create">Add new product</a>
  </div>
</body>
</html>