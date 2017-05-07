<?php

require_once dirname(__FILE__) . '/config.php';

var_dump($_GET);

if (is_numeric($_GET['userId'])) {
    $Id = $_GET['userId'];


    $conn = new mysqli('127.0.0.1', 'root', 'coderslab', 'exam'); // dane do połączenia
    $query = "select user_id, message from  Messages where user_id=.$Id;"; // przekazywane zapytanie
    $res = $conn->query($query); //komenda query wykonuje polecenie

    if ($conn->connect_error) {
        die("polaczenie nieudane: " . $conn->connect_error);
    }
    echo "polaczenie udane<br>";



    if ($res->num_rows > 0) {

        foreach ($res as $row) {
            print $row['user_id'] . ' ' . $row['message'] . '<br/>';
        }
    } else {
        echo "Brak wiadomosci dla danego uzytkownika.";
    }

    $conn->close();
    $conn = null;

    echo "connection closed<br>";
} else if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo "prosze wejsc na strone metoda get ";
} else if ($_GET['userId'] == null or ! is_numeric($_GET['userId'])) {
    echo "brak przeslania wymaganych danych";
}