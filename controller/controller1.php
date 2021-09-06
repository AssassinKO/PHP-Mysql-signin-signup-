<?php

  include '../model/model.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $address = $_POST['address'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  
  if($email == "" || $password == "" || $address == "" || $address2 == "" || $city == "" || $state == "" || $zip == "") {
    ?><script>alert("Input your data correctly!"); history.back(); </script><?php
  }
  else {
    $myModel = new Model();
    $myModel->signUp($email, $password, $address, $address2, $city, $state, $zip);
  }
  ?>