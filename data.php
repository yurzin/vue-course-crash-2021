<?php
$host = '185.84.108.232';
$user = 'u217579_admin';
$password = '~ImBornInUSSR_1972';
$db_name = 'b217579_sixarea';

$db = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8", $user, $password);

$query = "SELECT * FROM tasks";
$result = $db->query($query);
$data = $result->FetchAll(PDO::FETCH_ASSOC);

header("Access-Control-Allow-Origin: http://localhost:8080");
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
die();
?>