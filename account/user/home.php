<?php

require_once 'dblogin.php';
require_once 'functions.php';



$connection  = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Something well wront");

$undoLists = array();
// var_dump($results);

// if ($results) {
//     $rows = $results->num_rows;
// } else echo "Something went wrong";
$t;

function getDeletedItems()
{           
    global $connection; 
    global $t;
    $q = "SELECT * FROM users WHERE deleted = 1";
    $r = $connection->query($q);
    $t = $r->num_rows;
    if($t>0)
    {
        for($j=0; $j<$t;++$j)
        {
        $d = $r->fetch_array(MYSQLI_ASSOC);
        $undoLists[] = $d['id'];
            // var_dump($d);

        }
        echo end($undoLists);
   }
}

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = sanitizeString($_POST['id']);
    $q = "UPDATE users SET deleted = 1 WHERE users.id = '$id'";
    $r = $connection->query($q);
    if ($r) {
        // $rowss = $r->num_rows;
    //    global $undoLists;
    //    $undoLists[] = $id;
        echo "Delete completed";
        getDeletedItems();
    } else echo "Something went wrong";
}


getDeletedItems();
if (isset($_POST['undo']) && isset($_POST['id'])) {
    $id = sanitizeString($_POST['id']);
    $q = "UPDATE users SET deleted = 0 WHERE users.id = '$id'";
    $r = $connection->query($q);
    if ($r) {
        // $rowss = $r->num_rows;
        echo "undo completed";
        getDeletedItems();
    } else echo "Something went wrong";
}



function displayData()
{
    global $connection;
    $sql = "SELECT * FROM users WHERE deleted = 0";
    $results = $connection->query($sql);

    $rows = $results->num_rows;

    for ($i = 0; $i < $rows; ++$i) {
        $row = $results->fetch_array(MYSQLI_ASSOC);
        $id = $row['id'];
        $fn = $row['firstname'];
        $ln = $row['lastname'];
        $e = $row['username'];
        echo <<<_ROW
                    <tr>
                        <td>$i</td>
                        <td>$id</td>
                        <td>$fn</td>
                        <td>$ln</td>
                        <td>$e</td>
                        <td>
                            <form action="" method="POST">
                                <td>
                                    <input type="hidden" name="id" value="$id"> 
                                    <input type="submit" name="delete" value="Del">
                                </td>
                                <td>
                                    <input type="hidden" name="id" value="$id"> 
                                    <input type="submit" name="undo" value="Undo">
                                </td>      
                            </form>  
                            
                            <td> 
                        </tr>
                _ROW;
    }
    getDeletedItems();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="table-responsive">
        <table class="table table-bordered border-success table-striped table-hover">
            <thead>
                <caption>Users</caption>

                <tr class="">
                    <th scope="col">sno</th>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th colspan="3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                displayData();
                ?>
            </tbody>
        </table>
        <form action="" method="POST">
            <td>
                <input type="hidden" name="id" value="'<?php echo end($undoLists); ?>'">
                <input class="btn btn-success" type="submit" name="undo" value="Undo">
            </td>
        </form>
        <div class="btn">
            <?php  global $t; echo $t;?>
        </div>
    </div>
</body>

</html>