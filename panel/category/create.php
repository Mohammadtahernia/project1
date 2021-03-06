
<?php

require_once'../../functions/helpers.php';
require_once'../../functions/pdo_conection.php';

if(isset($_POST['name'])&& $_POST['name'] !==''){
    global $pdo;
    $query = 'INSERT INTO phpname_project.categories SET name=?,create_at=NOW();';
 
    $statement->execute([$_POST['name']]);  
    header('Location: http://localhost/php-project/project1/panel/category/');
exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP panel</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" media="all" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" media="all" type="text/css">
</head>

<body>
    <section id="app">
    <?php
    require_once '../layouts/top-nav.php';

?>
        <section class="container-fluid">
            <section class="row">
                <section class="col-md-2 p-0">
                <?php 
                     require_once '../layouts/sidebar.php';

                ?>
                </section>
                <section class="col-md-10 pt-3">

                    <form action="create.php" method="post">
                        <section class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name ...">
                        </section>
                        <section class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </section>

                    </form>

                </section>
            </section>
        </section>

    </section>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>