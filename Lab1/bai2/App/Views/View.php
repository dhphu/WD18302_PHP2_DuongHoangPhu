<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.2</title>
</head>

<body>
    <h1>
        <?= $course_name; ?>
    </h1>
    <form action="">
    <?
        include '../Model/Data.php';
    ?>
        <select name="semester">
            <? foreach ($course as $key => $value): ?>
                <option value="<?= $key; ?>">
                    <?= $value; ?>
                </option>
            <? endforeach; ?>

        </select>
        <button type="submit">Tìm</button>
    </form>
</body>

</html>