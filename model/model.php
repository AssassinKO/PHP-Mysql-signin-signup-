<?php

  class Model {
    function signIn($email, $pass) {
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'userdata';

      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      $query = "SELECT * FROM usertable WHERE email = '".$email."'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if(!$row) {
        ?><script>alert("Error Email!")</script><?php
      }
      else {
          if($row['password'] == $pass) {
              ?>
              <script>
                location.href = "../view/dashboard.php";
              </script>
              <?php
          }
          else {
            ?><script>alert("Error Password!");history.back();</script><?php
          }
      }
    }


    function signUp($email, $pass, $address, $address2, $city, $state, $zip) {
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'userdata';
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $count = 0;
      $queryAll = "SELECT * FROM usertable";
      $queryResult = mysqli_query($conn, $queryAll);
      while($row = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)){
        if($row['email'] == $email) {
        $count ++;
          ?><script>alert("This email is already used!");history.back();</script><?php
        }
      }

      if($count == 0) {
        $query = "INSERT INTO usertable (email, password, address, address2, city, state, zip) VALUES ('".$email."', '".$pass."', '".$address."', '".$address2."', '".$city."', '".$state."', '".$zip."')";
        if ($conn->query($query) === TRUE) {
          ?><script>location.href="../index.php";</script><?php
        }
        else {
          echo "Error: " . $query . "<br>" . $conn->error;
        }

        $conn->close();
      }
      else {
        $conn->close();
      }
    }
  }
?>