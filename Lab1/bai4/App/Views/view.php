<!doctype html>
<html lang="en">

<head>
    <title>Bài thêm lab 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Create_at</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($users as $user): ?>
                <tr>
                    <th>
                        <?= $user['id']; ?>
                    </th>
                    <th>
                        <?= $user['email']; ?>
                    </th>
                    <th>
                        <?= $user['firstname']; ?>
                    </th>
                    <th>
                        <?= $user['lastname']; ?>
                    </th>
                    <th>
                        <?= $user['create_at']; ?>
                    </th>
                    <th>
                        <?= $user['password']; ?>
                    </th>
                    <th>
                        <div class="row">
                            <input class="btn btn-success" type="submit" name="update" value="Cập Nhập">
                            <input class="btn btn-danger" type="submit" name="delete" value="Xóa">
                        </div>
                    </th>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</body>

</html>