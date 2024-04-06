<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/style.css">
    <title>Gurukripa Sarees</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Gurukripa Sarees</a>
  </div>
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</nav>
<h3>Sarees</h3>
<div class="content">
<?php
$sarees_poster = scandir('public/poster/');
foreach ($sarees_poster as $saree_poster) {
  if ($saree_poster == '.' || $saree_poster == '..') {
    continue;
  }
  $saree_poster = substr($saree_poster, 0, -5);
  print("<div class=\"card\" style=\"width: 18rem;\">
    <img src=\"public/poster/$saree_poster.jpeg\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
    <h5 class=\"card-title\">Saree Name</h5>
    <p class=\"card-text\">Catagories</p>
    <a href=\"/view?id=$saree_poster\" class=\"btn btn-primary\">View More</a>
    </div>
    </div>");
}
?>
</div>
</body>
</html>