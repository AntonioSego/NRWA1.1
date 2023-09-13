<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Category List</title>
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
  <h1>Category List</h1>
  <table>
    <tr>
      <th>Category ID</th>
      <th>Category Name</th>
      <th>Category Active</th>
      <th>Category Status</th>
    </tr>
    <?php foreach($categories as $category) { ?>
    <tr>
      <td><?php echo $category->CategoryID; ?></td>
      <td><?php echo $category->CategoryName; ?></td>
      <td><?php echo $category->CategoryActive; ?></td>
      <td><?php echo $category->CategoryStatus; ?></td>
      <td class="actions">
        <a href="?controller=categories&action=show&id=<?php echo $category->CategoryID; ?>">Show</a>
        <a href="?controller=categories&action=update&id=<?php echo $category->CategoryID; ?>">Update</a>
        <a href="?controller=categories&action=deletecategory&id=<?php echo $category->CategoryID; ?>">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <div style="text-align: center;">
    <a href="?controller=categories&action=create">Add new category</a>
  </div>
</body>
</html>