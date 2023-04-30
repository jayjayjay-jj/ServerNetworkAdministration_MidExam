<?php
$host = '172.17.0.2';
$dbname = 'Redlock';
$username = 'root';
$password = 'USER';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

$stmt = $pdo->query('SELECT * FROM Users');

echo '<table>';
echo '<tr><th>ID</th><th>Name</th><th>Address</th><th>Position</th></tr>';

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['UserID'] . '</td>';
    echo '<td>' . $row['UserName'] . '</td>';
    echo '<td>' . $row['UserAddress'] . '</td>';
    echo '<td>' . $row['UserPosition'] . '</td>';
    echo '</tr>';
}

echo '</table>';

?>