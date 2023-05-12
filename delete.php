<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $carId = $_POST['car_id'];

  $conn = mysqli_connect("localhost", "root", "", "nowa");

  if ($conn->connect_error) {
      die("Nie udało się połączyć z bazą danych: " . $conn->connect_error);
  }


  $sql = "DELETE FROM cars WHERE id = $carId";

  if ($conn->query($sql) === TRUE) {
      echo "Samochód został Kupiony.";
  } else {
      echo "Wystąpił błąd podczas Kupowania samochodu: " . $conn->error;
  }

  $conn->close();
}
?>