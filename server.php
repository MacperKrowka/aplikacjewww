<?php



$conn = mysqli_connect("localhost", "root", "", "nowa");


if ($conn->connect_error) {
    die("Nie udało się połączyć z bazą danych: " . $conn->connect_error);
}



    $sql = "SELECT * FROM cars"; // Przykładowe zapytanie SQL do pobrania samochodów
    $result = $conn->query($sql);

    $cars = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cars[] = $row;
        }
    }





?>

