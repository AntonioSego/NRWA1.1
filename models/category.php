<?php
  class Category {
    // define attributes
    public $CategoryID;
    public $CategoryName;
    public $CategoryActive;
    public $CategoryStatus;
    

    // constructor
    public function __construct($CategoryID, $CategoryName, $CategoryActive, $CategoryStatus) {
      $this->CategoryID    = $CategoryID;
      $this->CategoryName  = $CategoryName;
      $this->CategoryActive = $CategoryActive;
      $this->CategoryStatus = $CategoryStatus;
    }

    // getter methods
    public function getCategoryID() {
      return $this->CategoryID;
  }

  public function getCategoryName() {
      return $this->CategoryName;
  }

  public function getCategoryActive() {
      return $this->CatergoryActive;
  }

  public function getCategoryStatus() {
      return $this->CategoryStatus;
  }



  // setter methods
  public function setCategoryID($CategoryID) {
      $this->CategroyID = $CategoryID;
  }

  public function setCategoryName($CategoryName) {
      $this->CategoryName = $CategoryName;
  }

  public function setCategoryActive($CategoryActive) {
      $this->CategoryActive = $CategoryActive;
  }

  public function setCategoryStatus($CategoryStatus) {
      $this->CategoryStatus = $CategoryStatus;
  }


    // read all records
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM Categories');

      foreach($req->fetchAll() as $category) {
        $list[] = new Category($category['CategoryID'], $category['CategoryName'], $category['CategoryActive'], $category['CategoryStatus']);
      }

      return $list;
    }

    // read one record by ID
    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM Categories WHERE CategoryID = :id');
      $req->execute(array('id' => $id));
      $category = $req->fetch();

      return new Category($category['CategoryID'], $category['CategoryName'], $category['CategoryActive'], $category['CategoryStatus']);
    }

    // create a new record
    public static function create($data) {
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO Categories (CategoryID, CategoryName, CategoryActive,CategoryStatus) VALUES (:CategoryID, :CategoryName, :CategoryActive, :CategoryStatus)');
      $req->execute($data);
      return $db->lastInsertId();
    }

    // update a record by ID
    public static function update($id, $data) {
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE Categories SET CategoryName = :CategoryName, CategoryActive = :CategoryActive,  CategoryStatus = :CategoryStatus WHERE CategoryID = :id');
      $data['id'] = $id;
      $req->execute($data);
    }

    public static function deletecategory($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $sql="DELETE FROM CATEGORIES WHERE CategoryID ='$id'";


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