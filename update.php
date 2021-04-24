<!doctype html>

<?php

include 'db.php';

$id=$_GET['id'];

$sql= "select * from tasks where id='$id'";

$rows=$db->query($sql);
$row=$rows->fetch_assoc();
if(isset($_POST['send'])){

    $task=$_POST['task'];
    $sql2="update tasks set name='$task' where id ='$id'";
    $db->query($sql2);
    header('location:index.php');
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Crud App</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
    <center><h1>Todo list</h1></center>
        <div class="row">
           
            

            <div class="col-md-10 col-md-offset-1">
            
            <table class="table">
            <hr><br>      
                            <form  method="post">
                            
                                    <div class="form-group">
                                        <label>Task Name</label>
                                        <input type="text" required name="task" value="<?php echo $row['name']; ?>" class="form-control">
                                    </div>
                            <input type="submit" name="send" value="Add Task" class="btn btn-success">
                            </form>
                       
            
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>