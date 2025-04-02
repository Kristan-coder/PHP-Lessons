<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href= "style.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/DataTypes.php">Datatypes</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/operators.php">Operators</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/conditionals.php">Conditionals</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/calculator.php"> Calculator</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/calendar.php"> Calendar</a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <form method="GET">

<?php
$dayofweek = date("w");

switch ($dayofweek) {
    case 1:
        echo "It is Monday!";
        break;
        case 2:
        echo "It is Tuesday!";
        break;
        case 3:
        echo "It is Wednesday!";
        break;
        case 4:
        echo "It is Thursday!";
        break;
        case 5:
        echo "It is Friday!";
        break;
        case 6:
        echo "It is Saturday!";
        break;
        case 0:
        echo "It is Sunday!";
        break;
}
  ?>
 </form>

</body>
</html>