<?
include 'Config.php';

function listUser()
{
    
    global $conn;

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Câu truy vấn bị lỗi: ' . mysqli_error($conn));
    }

    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $users;
}

?>