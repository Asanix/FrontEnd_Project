<?php
session_start();
include('dbcon.php');


if(isset($_POST['save_client'])){
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
}

  try{
  $query = "INSERT INTO clients (Fullname , Phone ,  Email , Message) VALUES(? , ? , ? , ?)";
  $statement = $conn->prepare($query);
  $statement->bindParam(1, $fullname);
  $statement->bindParam(2, $phone);
  $statement->bindParam(3, $email);
  $statement->bindParam(4, $message);
  $query_execute = $statement->execute();

  if ($query_execute){
    $_SESSION['message'] = "Added Successfully";
    header('Location: index.php');
    exit(0);
  }
  else{
    $_SESSION['message'] = "Not Added Successfully";
    header('Location: index.php');
    exit(0);
  }
  
}catch(PDOException $e){
  echo "My Error Type:" . $e->getMessage();
  }
?>