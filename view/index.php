<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/style.css">
    <title><?php $id = $_GET['id']; print("$id"); ?> | Gurukripa Sarees</title>
</head>
<body class="dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Gurukripa Sarees</a>
  </div>
</nav>
<?php
$id = $_GET["id"];
print("<h3>Saree Name</h3>
<div class=\"details\">
<div class=\"imagebg\"><img src=\"../public/poster/$id.jpeg\" alt=\"...\"></div>
<div class=\"info\">
<label>Price: ****.**</label> <br />
<label>Catagory: ******</label><br />
<label>Description: </label><br />
<a class=\"buy-button\" href=\"/buy?id=$id\">Buy</a>
</div>
</div>");
?>
</body>
</html>