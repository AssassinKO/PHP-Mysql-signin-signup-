<?php

  include '../model/model.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);
  
  if($email == "" || $password == "") {
    ?><script>alert("Input your email and password correctly!"); history.back(); </script><?php
  }
  else {
    $myModel = new Model();
    $myModel->signIn($email, $password);
  }

  ?>