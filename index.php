<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sprzedaż Samochodów</title>
  <link rel="stylesheet" href="style.css">
</head>

<?php
require_once 'server.php';





$sql = "SELECT * FROM cars";
$result = $conn->query($sql);


?>


<body>
<header>
  <h1>Sprzedaż Samochodów</h1>
  <div id="dateTime"></div>
</header>

<main>

  <div class="container">
    <div class="car">
    <h2>Lista samochodów</h2>
    <ul>
      <?php
                if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
      echo "<li>";
      echo "<h3>" . $row["brand"] . " " . $row["model"] . "</h3>";
      echo "<p>" . $row["description"] . "</p>";
      echo "<img src='" . $row["image"] . "' alt='" . $row["brand"] . " " . $row["model"] . "'>";
      echo "</li>";echo
      "
     <form method=\"POST\" action=\"delete.php\">
       <input type=\"hidden\" name=\"car_id\" value=", $row['id'], ">
       <button type=\"submit\">!!KUP!!</button>
     </form>
      ";
      }
      } else {
      echo "<li>Brak samochodów</li>";
      }
      ?>
    </ul>
  </div>
</div>






<script src="script.js"></script>
</body>
</html>


