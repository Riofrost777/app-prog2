<?php
// session_start();
include_once 'connectDB.php';

class allFunction
{
  private $pdo = null;

  public function __construct()
  {
    if($this->pdo == null)
    {
      $connection = new connectDB();
      $this->pdo = $connection->connectDatabase();
    }
  }

  public function checkUsername ($username) {
    try {
      $query = $this->pdo->prepare('
        SELECT * FROM congregation WHERE name = ?
      ');
      $query->bindParam(1, $username, PDO::PARAM_STR);
      $query->execute();
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    }
    catch (PDOException $e) {
      echo '<script> console.log ("' . $e->getMessage() . '")</scipt>';
    }
  }

  function registerAccount($data)
  {

    try {

      $query = $this->pdo->prepare('
      INSERT INTO congregation VALUES(NULL, :email, :phoneNumber, :password, :username, :address, :roleID)
      ');
      $query->execute($data);
      return 'Berhasil';
    }
    catch (PDOException $e) {
      echo "<script>alert('Account Failed to Created');</script>";
      echo "<script>window.location ='index.php?send=register'</script>";
    }
  }

  public function updateAccount($data)
  {
    try
    {
      $query = $this->pdo->prepare('UPDATE congregation SET email=:cemail, mobile=:cmobile, name=:cname, address=:caddress, roleID=:roleID WHERE id_congregation =:cid');

      $query->execute($data);
    }
    catch(PDOException $e)
    {
      echo 'connection failed: '.$e->getMessage();
      echo "<script>alert('Update Profile Failed!')</script>";
    }
  }

  public function deleteAccount($id)
  {
    try {
      $data=[
        'id' => $id,
      ];
      $query = $this->pdo->prepare('DELETE FROM joinedEvent WHERE id_con=:id');
      $query->execute($data);
      $query = $this->pdo->prepare('DELETE FROM congregation WHERE id_congregation=:id');
      $query->execute($data);
    } catch (PDOException $e) {

    }

  }

  public function getAccountInfo($data)
  {
    try {
      $query = $this->pdo->prepare('SELECT * FROM congregation WHERE id_congregation =:cid');
      $query->execute($data);
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    } catch (PDOException $e) {

    }

  }

  public function login($email)
  {
    $data = [
      'email' => $email,
    ];
    try
    {
      $query = $this->pdo->prepare('SELECT * FROM congregation WHERE email = :email');

      $query->execute($data);
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    }
    catch(PDOException $e)
    {
      echo 'fail';
      header("Location:login.php?info=loginfail");
    }
  }

  public function adminLogin($email)
  {
    $data = [
      'email' => $email,
    ];
    try
    {
      $query = $this->pdo->prepare('SELECT * FROM admin where email = :email');

      $query->execute($data);
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    }
    catch(PDOException $e)
    {
      echo 'fail';
      header("Location:login.php?info=loginAdminFail");
    }
  }

  public function updateAdmin($data)
  {
    try
    {
      $query = $this->pdo->prepare('UPDATE admin SET email=:aemail, mobile=:amobile, name=:aname,  roleID=:roleID WHERE id_admin =:aid');

      $query->execute($data);
    }
    catch(PDOException $e)
    {
      echo 'connection failed: '.$e->getMessage();
      echo "<script>alert('Update Profile Failed!')</script>";
    }
  }

  public function displayFinancial()
  {
    try
    {
      $query = $this->pdo->prepare('SELECT * FROM financeDetails');
      $query->execute();
      if ($query){
        return $query->fetchAll();
      }
      else{
        return '0';
      }
    }
    catch (PDOException $e)
    {
      echo 'fail';
      header("Location:index.php?info=menuDisplayFail");
    }

  }

  public function selectCongregation($email)
  {
    $data=[
      'email' => $email,
    ];
    try {
      $query = $this->pdo->prepare('SELECT * FROM congregation WHERE email=:email');
      // $query->bindParam(1, $email, PDO::PARAM_STR);
      $query->execute($data);
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    }
    catch (PDOException $e) {

    }

  }

  public function countUser()
  {
    try {
      $query = $this->pdo->prepare('SELECT COUNT(*) FROM congregation');
      // $query->bindParam(1, $id, PDO::PARAM_INT);
      $query->execute();
      if ($query){
        return $query->fetchColumn();
      }
      else{
        return '0';
      }
    }
    catch (PDOException $e) {

    }
  }

  public function addJoinedEvent($data)
  {
    try {
      $query = $this->pdo->prepare('INSERT INTO joinedEvent VALUES(NULL, :id_con, :id_ev, NULL, :name, :address)');
      $query->execute($data);
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    } catch (PDOException $e) {

    }

  }

  public function checkIsRegistered($id, $id_ev)
  {
    try {
      $query = $this->pdo->prepare('SELECT COUNT(*) FROM joinedEvent WHERE con_id=? AND ev_id=?');
      $query->bindParam(1, $id, PDO::PARAM_INT);
      $query->bindParam(2, $id_ev, PDO::PARAM_INT);
      $query->execute();
      if ($query){
        return $query->fetchColumn();
      }
      else{
        return '0';
      }
    } catch (PDOException $e) {

    }

  }

  public function displayJoinedEvent($id)
  {
    try
    {
      $query = $this->pdo->prepare('SELECT * FROM joinedEvent WHERE con_id=?');
      $query->bindParam(1, $id, PDO::PARAM_INT);
      $query->execute();
      if ($query){
        return $query->fetchAll();
      }
      else{
        return '0';
      }
    }
    catch (PDOException $e)
    {
      echo 'fail';
      header("Location:index.php?info=menuDisplayFail");
    }
  }

  public function displaySelectedEvent($id)
  {
    try
    {
      $query = $this->pdo->prepare('SELECT * FROM event WHERE id_event=?');
      $query->bindParam(1, $id, PDO::PARAM_INT);
      $query->execute();
      if ($query){
        return $query->fetch();
      }
      else{
        return '0';
      }
    }
    catch (PDOException $e)
    {
      echo 'fail';
      header("Location:index.php?info=menuDisplayFail");
    }

  }

  public function deleteJoinedEvent($idc,$id)
  {
    $data = [
      'idc' => $idc,
      'id' => $id,
    ];
    $query = $this->pdo->prepare('DELETE FROM joinedEvent WHERE con_id=:idc AND ev_id=:id');
    $query->execute($data);
  }

  public function getPic()
  {
    $query = $this->pdo->prepare('SELECT picture FROM event ORDER BY id_event DESC LIMIT 3');
    $query->execute();
    $query->fetch();
  }

}

 ?>
