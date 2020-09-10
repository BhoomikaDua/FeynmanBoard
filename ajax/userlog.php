<?php
session_start();

// database settings
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'feynman';

// connect to the database
$Database = new mysqli($server, $user, $pass, $db);

if($_POST['action'] === 'login') {
  $name = $Database -> real_escape_string($_POST['name']);

  $sql = "SELECT * FROM users WHERE name = '".$name."'";
  $result = $Database->query($sql);
   if ($result->num_rows > 0) {
    // existing user
    $row = $result->fetch_assoc();
    $_SESSION['name']=$row["name"];
    $_SESSION['id']=$row["id"];
    echo 'TRUE';
    }
  else {
    // new user
    $sqlRegister = "INSERT INTO users (name) VALUES ('".$name."')";
    $resultRegister = $Database->query($sqlRegister);
    $sqlRegister = "SELECT * FROM users WHERE name= '".$name."'";
    $resultRegister = $Database->query($sqlRegister);
    if ($resultRegister->num_rows > 0) {
      // success
    $row = $resultRegister->fetch_assoc();
    $_SESSION['id']=$row["id"];
    $_SESSION['name']=$name;
		  echo 'TRUE';
    }
    else {
      // failure
		  echo 'FALSE';
  }
  }
}
elseif($_POST['action'] === 'insertEssay') {

    $topic = $Database -> real_escape_string($_POST['topic']);
    $essay = $Database -> real_escape_string($_POST['text']);
    $html = $Database -> real_escape_string($_POST['blocked']);


    $sql = "INSERT INTO posts (topic, content, classified_content, user_id)
    VALUES ('".$topic."','".$essay."','".$html."','".$_SESSION['id']."')";
    $result = $Database->query($sql);
    if ($result) {
      // success
      $sql = "SELECT id FROM posts WHERE topic='".$topic."'";
      $res=$Database->query($sql);
      if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $_SESSION['post_id']=$row["id"];
      }else{
        echo 'FALSE';
      }
     
		  echo 'TRUE';
    }
    else {
      // failure
		  echo 'FALSE';
  }
 }
 elseif($_POST['action'] === 'classifyEssay') {
  $txt = $Database -> real_escape_string($_POST['txt']);
  $perc = $Database -> real_escape_string($_POST['perc']);

  $sql = "UPDATE posts SET classified_content='".$txt."',percentage='".$perc."' WHERE id='".$_SESSION['post_id']."' ";
  $result = $Database->query($sql);
  if ($result) {
    // success
    unset($_SESSION['post_id']);
    echo 'TRUE';
  }
  else {
    // failure
    echo 'FALSE';
  }
  
  
}

