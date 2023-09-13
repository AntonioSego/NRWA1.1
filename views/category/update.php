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


<h1>Update Category</h1>
<form action="?controller=categories&action=update" method="POST">
  <label>Category ID:</label><br>
  <input type="text" name="category_id" value="<?= $category->getCategoryID() ?>"><br>
  <label>Category Name:</label><br>
  <input type="text" name="CategoryName" value="<?= $category->getCategoryName() ?>"><br>
  <label>Category Active:</label><br>
  <input type="text" name="CategoryActive" value="<?= $category->getCategoryActive() ?>"><br>
  <label>Category Status:</label><br>
  <input type="text" name="CategoryStatus" value="<?= $category->getCategoryStatus() ?>"><br>
  <input type="submit" value="Update">
</form>
