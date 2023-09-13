<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>User List</title>
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
  <h1>User List</h1>
  <table>
    <tr>
      <th>User ID</th>
      <th>Password</th>
      <th>Username</th>
    </tr>
    <?php foreach($users as $user) { ?>
    <tr>
      <td><?php echo $user->UserID; ?></td>
      <td><?php echo $user->Password; ?></td>
      <td><?php echo $user->Username; ?></td>
      <td class="actions">
        <a href="?controller=users&action=show&id=<?php echo $user->UserID; ?>">Show</a>
        <a href="?controller=users&action=update&id=<?php echo $user->UserID; ?>">Update</a>
        <a href="?controller=users&action=deleteuser&id=<?php echo $user->UserID; ?>">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <div style="text-align: center;">
    <a href="?controller=user&action=create">Add new user</a>
  </div>
</body>
</html>