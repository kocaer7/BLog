<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet "href="blogpost.css">
</head>
<body>


<?php

$user = 'root';
$pass = '';

try {
        $conn = new PDO("mysql:host=;dbname=blog", $user, $pass);
    }
        catch (PDOException $error) {
        echo $error;
    }

$selectBlog = $conn->prepare("SELECT * FROM blogpost");
$selectBlog->execute();
$blogs = $selectBlog->fetchAll();

foreach ($blogs as $blog) {
    ?>
<h1><?php echo $blog["titel"]; ?></h1>
<h2>Geplaatst op: <?php echo $blog["datum"] ?></h2>
<p><?php echo $blog["body"]; ?></p>

<?php }
?>

</body>
</html>