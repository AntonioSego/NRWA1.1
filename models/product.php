<?php
  class Product {
    // define attributes
    public $ProductID;
    public $ProductName;
    public $Quantity;
    public $Rate;
    public $Active;
    public $Status;
    public $CategoryID;

    // constructor
    public function __construct($ProductID, $ProductName, $Quantity, $Rate, $Active, $Status, $CategoryID) {
      $this->ProductID    = $ProductID;
      $this->ProductName  = $ProductName;
      $this->Quantity     = $Quantity;
      $this->Rate         = $Rate;
      $this->Active       = $Active;
      $this->Status       = $Status;
      $this->CategoryID   = $CategoryID;
    }

    // getter methods
    public function getProductID() {
      return $this->ProductID;
  }

  public function getProductName() {
      return $this->ProductName;
  }

  public function getQuantity() {
      return $this->Quantity;
  }

  public function getRate() {
      return $this->Rate;
  }

  public function getActive() {
      return $this->Active;
  }

  public function getStatus() {
      return $this->Status;
  }

  public function getCategoryID() {
      return $this->CategoryID;
  }


  // setter methods
  public function setProductID($ProductID) {
      $this->ProdictID = $ProductID;
  }

  public function setProductName($ProductName) {
      $this->ProductName = $ProductName;
  }

  public function setQuantity($Quantity) {
      $this->Quantity = $Quantity;
  }

  public function setRate($Rate) {
      $this->Rate = $Rate;
  }

  public function setStatus($Status) {
      $this->Status = $Status;
  }

  public function setCategoryID($CategoryID) {
      $this->CategoryID = $CategoryID;
  }



    

    // read all records
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM Products');

      foreach($req->fetchAll() as $product) {
        $list[] = new Product($product['ProductID'], $product['ProductName'], $product['Quantity'], $product['Rate'], $product['Active'], $product['Status'], $product['CategoryID']);
      }

      return $list;
    }

    // read one record by ID
    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM Products WHERE ProductID = :id');
      $req->execute(array('id' => $id));
      $product = $req->fetch();

      return new Product($product['ProductID'], $product['ProductName'], $product['Quantity'], $product['Rate'], $product['Active'], $product['Status'], $product['CategoryID']);
    }

    // create a new record
    public static function create($data) {
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO Products (ProductID, ProductName, Quantity, Rate, Active, Status, CategoryID) VALUES (:ProductID, :ProductName, :Quantity, :Rate, :Active, :Status, :CategoryID)');
      $req->execute($data);
      return $db->lastInsertId();
    }

    // update a record by ID
    public static function update($id, $data) {
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE Products SET ProductName = :ProductName, Quantity = :Quantity, Rate = :Rate, Active = :Active, Status = :Status, CategoryID = :CategoryID WHERE ProductID = :id');
      $data['id'] = $id;
      $req->execute($data);
    }

    public static function deleteproduct($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $sql="DELETE FROM PRODUCTS WHERE ProductID ='$id'";


      if ($db->query($sql) == TRUE){
        //if (1==2){
            $rez="USPJESNO brisanje";
          }
            else {
             $rez="NESPJESNO brisanje";;
            }
            return $rez;
  }
  
    

  }

?>