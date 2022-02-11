<?php
    // Pobieranie danych z pól formularza rejestracji do zmiennych
    $login = $_POST["login"];
    $input_password = $_POST["password"];
    
    // Zmienne zawierające dane do logowania do bazy danych
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "creatode";

    $status_code = 0;

    // Łączenie do bazy
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Sprawdzanie czy nie wystąpił błąd z łączeniem do bazy danych
    if ($conn->connect_error) {
        die("Problem z połączneiem do bazy danych: " . $conn->connect_error); // Jeśli błąd to wyświetl błąd
    }
    // Zapytanie SQL dodające użytkownika do bazy danych
    $sql = "SELECT * FROM users WHERE login = '". $login ."' AND password='". $input_password ."'";

    $result = $conn->query($sql);
    // Sprawdzenie czy zapytanie wykonało się pomyślnie
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. " - e-mail: " . $row["email"]. " " . $row["login"]. "<br>";
          
          setcookie("id",  $row["id"], time() + 2 * 24 * 60 * 60);
          setcookie("login", $row["login"], time() + 2 * 24 * 60 * 60);
          setcookie("email",  $row["email"], time() + 2 * 24 * 60 * 60);


          //echo "DAne z ciastek:";
          //echo $_COOKIE["id"];
          //echo $_COOKIE["login"];
          //echo $_COOKIE["email"];
        }
      } else {
        echo "0 results";
        $status_code = 1;
      }
    
    // Zamknij połączenie
    $conn->close();
    if($status_code === 1){
      include("blad.php");
    } else {
      include("moje_konto.php");
    }
?>