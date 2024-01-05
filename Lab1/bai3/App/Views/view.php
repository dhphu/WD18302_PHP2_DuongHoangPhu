<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>

<body>
    <?php

    if (isset($_POST['email'])) {
        if ($user) {
            echo '<h2>' . $user['firstname'] . ' ' . $user['lastname'] . ' </h2>';
        } else {
            echo '<h2>Không tìm thấy email này</h2>';
        }
    }
    ?>
    <form action="" method="post">
        <input type="email" name="email" id="" placeholder="Nhập email vào ">
        <input type="submit" value="Submit" name="submit">
    </form>


</body>

</html>