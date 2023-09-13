<style>form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  max-width: 800px;
  margin: 0 auto;
}

label {
  font-weight: bold;
}

@media screen and (max-width: 768px) {
  form {
    grid-template-columns: 1fr;
  }
}
</style>


<h1>Update User</h1>
<form action="?controller=categories&action=update" method="POST">
  <label>User ID:</label><br>
  <input type="text" name="user_id" value="<?= $user->getUserID() ?>"><br>
  <label>Password:</label><br>
  <input type="password" name="Password" value="<?= $user->getPassword() ?>"><br>
  <label>Username:</label><br>
  <input type="text" name="Username" value="<?= $user->getUsername() ?>"><br>
  <input type="submit" value="Update">
</form>
