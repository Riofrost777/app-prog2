<?php
class connectDB{
  private $connect = null;

  public function connectDatabase() {
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    $this->connect = new PDO('mysql:host=localhost;dbname=dbchurchfinance', 'Rio', 'qwerty', $options);

    return $this->connect;
  }

  public function disconnect() {
      $this->conn = null;
  }
}
?>
