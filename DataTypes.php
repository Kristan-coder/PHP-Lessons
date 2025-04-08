<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataTypes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
       
        body {
            background-color:rgb(33, 170, 74); /
            color: #333;
        }

       
        .navbar {
            background-color:rgb(23, 122, 53);
        }

       
        .btn-outline-success {
            border-color:rgb(31, 107, 50);
            color:rgb(33, 105, 51);
        }

        .btn-outline-success:hover {
            background-color:rgb(88, 213, 161);
            color: white;
        }

       
        input[type="text"] {
            background-color: #f0f8ff;
            border: 1px solid #a1c8e0;
        }

     
        button {
            background-color:rgb(39, 228, 155);
            border-color: #58a6d5;
            color: white;
        }

        button:hover {
            background-color:rgb(0, 153, 255);
        }
    </style>
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
          <a class="nav-link active" aria-current="page" href="http://localhost/PHP-Lessons/index.php">Home</a>
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
    <?php
    //string
     $name = 'Coding is the best class in Madison Academic Magnet Highschool';

    //Integer
    $name = 20;

    //Float
    $name = 65.4184;

    //BooLean
   

    //Array
    $names = array("Johnny","Kristan","Cameron");
    echo $names['2'];
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"></script>
    </body>
</html>