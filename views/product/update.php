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


<h1>Update Product</h1>
<form action="?controller=products&action=update" method="POST">
  <label>Product ID:</label><br>
  <input type="text" name="product_id" value="<?= $product->getProductId() ?>"><br>
  <label>Product Name:</label><br>
  <input type="text" name="product_name" value="<?= $product->getProductName() ?>"><br>
  <label>Quantity:</label><br>
  <input type="text" name="quantity" value="<?= $product->getQuantity() ?>"><br>
  <label>Rate:</label><br>
  <input type="text" name="Rate" value="<?= $product->getRate() ?>"><br>
  <label>Active:</label><br>
  <input type="text" name="active" value="<?= $product->getActive() ?>"><br>
  <label>Status:</label><br>
  <input type="text" name="status" value="<?= $product->getStatus() ?>"><br>
  <label>CategoryID:</label><br>
  <input type="text" name="categoryID" value="<?= $product->getCategoryID() ?>"><br>
  <input type="submit" value="Update">
</form>
