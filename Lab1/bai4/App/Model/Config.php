<?
$host = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'php2';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại rồi!!:" . $conn->connect_error);
}
?>