<?php
    include('./db_config.php');

    if($_SERVER['REQUEST_METHOD']==='POST'){

        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        $todo_item = $_POST['todo'];
        $sql = "INSERT INTO todo_list (title) VALUES ('$todo_item')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('Location: ./index.php');
        }
    }
?>