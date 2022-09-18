<?php 
  include('./db_config.php');
  $id = $_GET['deleteid'];
  $sql = "DELETE FROM todo_list WHERE id= $id";
  $result = $conn->query($sql);
  if($result){
    header('Location: ./index.php');
  }

?>