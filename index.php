<?php
$name = "Dibash";
$age = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro Example of Variable</title>
</head>
<body>
  <div class="card">
    <h1 id="intro">
      <?php
        echo "My name is $name and my age is $age.";
      ?>
    </h1>
  </div>
</body>
</html>
