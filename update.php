<?php 
    include('./db_config.php');
    $id = $_GET['updateid'];
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $todo = $_POST['todo'];
        $sql = "UPDATE todo_list SET title = $todo WHERE id= $id";
        $result = $conn->query($sql);
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "done";
        }
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <div class="container p-3">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
            <h3 class='text-center'>TODO Application</h3>
            <input type="text" class="form form-control mb-3" name="todo" placeholder="Enter TODO..." >
            <button type="submit" class="btn btn-primary">Update TODO</button>
        </form>
        </div>
    </body>
</html>