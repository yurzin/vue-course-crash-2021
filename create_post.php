<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
    header("Access-Control-Allow-Methods: GET, POST, HEAD, OPTIONS, PUT, DELETE, PATCH");
    header("Access-Control-Allow-Headers: X-Requested-With");

    $host = '185.84.108.232';
    $user = 'u217579_admin';
    $password = '~ImBornInUSSR_1972';
    $db_name = 'b217579_sixarea';

    $pdo = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8", $user, $password);
    
    $text = $_POST['text'];
    $day = $_POST['day'];
    $reminder = $_POST['reminder'];

    $data = array( 'text' => $text, 'day' => $day, 'reminder' => $reminder );

    $query = $pdo->prepare("INSERT INTO tasks (text, day, reminder) VALUES (:text, :day, :reminder)");
    $query->execute($data)
?>