<?php
    include('./db_config.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $todo = $_POST['todo'];
        $sql = "insert into todo_list (title) values ('$todo')";
    
        $result = mysqli_query($conn,$sql);
        if($result){
          header('Location: index.php');
        }else{
          die($conn -> connect_error);
        }
    }   
?>

