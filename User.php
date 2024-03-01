<?php

class user
{
   private $connection;
    public function __construct($connection){
  $this->connection=$connection;
    }
    public function createusers($username,$fullname,$email,$birthdate,$password){

        $encryptpass=password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, fullname, email, birthdate, password) VALUES ('$username', '$fullname', '$email', '$birthdate', '$encryptpass')";
        return $this->connection->query($sql);

    }
     public function verifyuser($username,$password){
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = $this->connection->query($sql);
       if ($result->num_rows == 1) {
       $row = $result->fetch_assoc();
      if (password_verify($password, $row['password'])) {
       return true;
     }
}
        return false;
}


}