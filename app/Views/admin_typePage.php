<!DOCTYPE html>
<html lang="en">
<?php
    $con = mysqli_connect("localhost", "root", "", "friendzone") or die("Error: " . mysqli_error($con));
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Manage Category</title>

    <link rel="stylesheet" href="/CSS/table-type.css">

</head>
<body>
    <?php
        $sql_category = "SELECT * FROM category";
        $query = mysqli_query($con, $sql_category);
    ?>
    <?php require('components/navbar.php'); ?>
    <div class="container">
        <?php require('components/table-type.php'); ?>
    </div>
</body>
</html>