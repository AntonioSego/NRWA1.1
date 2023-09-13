<?php
  class User {
    // define attributes
    public $UserID;
    public $Password;
    public $Username;
    

    // constructor
    public function __construct($UserID, $Password, $Username) {
      $this->UserID    = $UserID;
      $this->Password  = $Password;
      $this->Username = $Username;
      
    }

    // getter methods
    public function getUserID() {
      return $this->UserID;
  }

  public function getPassword() {
      return $this->Password;
  }

  public function getStatus() {
      return $this->Status;
  }

 



  // setter methods
  public function setUserID($UserID) {
      $this->UserID = $UserID;
  }

  public function setPassword($Password) {
      $this->Password = $Password;
  }

  public function setUsername($Username) {
      $this->Username = $Username;
  }



    // read all records
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM Users');

      foreach($req->fetchAll() as $user) {
        $list[] = new User($user['UserID'], $user['Password'], $user['Username']);
      }

      return $list;
    }

    // read one record by ID
    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM Users WHERE UserID = :id');
      $req->execute(array('id' => $id));
      $user = $req->fetch();

      return new User($user['UserID'], $user['Password'], $user['Username']);
    }

    // create a new record
    public static function create($data) {
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO Users (UserID, Password, Username) VALUES (:UserID, :Password, :Username)');
      $req->execute($data);
      return $db->lastInsertId();
    }

    // update a record by ID
    public static function update($id, $data) {
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE Users SET Password = :Password, Username = :Username WHERE UserID = :id');
      $data['id'] = $id;
      $req->execute($data);
    }

    public static function deleteuser($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $sql="DELETE FROM USERS WHERE UserID ='$id'";


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