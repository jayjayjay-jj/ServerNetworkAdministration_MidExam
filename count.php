<?php
$host = '172.17.0.4';
$dbname = 'Redlock';
$username = 'root';
$password = 'USER';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

$query = $pdo->query('SELECT * FROM Users');
$query->execute();

$userCount = 0;
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $userCount++;
}

echo "User count: " . $userCount . " User(s)";

?>