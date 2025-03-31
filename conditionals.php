<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<?php
$x = 4;
if ($x == 1) {
    echo "Coach b is very handsome!";
}
elseif ($x == 2) {
    echo "Coach b is kinda handsome!";
}

elseif ($x == 3) {
    echo "Coach B is kinda handsome!";
}

elseif ($x == 4) {
    echo "Coach b is kinda ugly!";
}
else {
    echo "Coach b is very ugly!";}
?>

<?php
$x = 1;
switch ($x) {
    case 1:
        echo "My statement isnt true";
        break;
        case 2:
            echo "My statement is true";
        break;
         case 3:
            echo "My statement is false";
        break;
        case 4:
            echo "My statement isnt false";
        break;
    
}
?>
  </body>

</html>