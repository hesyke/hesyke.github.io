<?php
    // Pobieranie danych z pól formularza rejestracji do zmiennych
    $login = $_POST["login"];
    $email = $_POST["email"];
    $input_password = $_POST["password"];
    
    // Zmienne zawierające dane do logowania do bazy danych
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "creatode";

    // Łączenie do bazy
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Sprawdzanie czy nie wystąpił błąd z łączeniem do bazy danych
    if ($conn->connect_error) {
        die("Problem z połączneiem do bazy danych: " . $conn->connect_error); // Jeśli błąd to wyświetl błąd
    }
    // Zapytanie SQL dodające użytkownika do bazy danych
    $sql = "INSERT INTO users (login, email, password)
    VALUES ('" . $login."', '". $email ."', '". $input_password ."')";
    // Sprawdzenie czy zapytanie wykonało się pomyślnie
    if ($conn->query($sql) === TRUE) {
    echo "Zostałeś/aś pomyślnie zarejestrowany"; // Jeśli tak to komunikat
    } else {
    echo "Błąd: " . $sql . "<br>" . $conn->error; // Jeśli nie to wyświetl błąd
    }
    // Zamknij połączenie
    $conn->close();

?>