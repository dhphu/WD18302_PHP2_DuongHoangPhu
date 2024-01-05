<?
echo "PC07544 - Lab 1.1 <br>";
$course = [
    's1' => 'JS nang cao',
    's2' => 'Lap trinh PHP2',
    's3' => 'Lap trinh PHP1'

];
//Model
/**
 * Hàm này dùng để lấy ra mảng tuần tự của khóa học
 * @return array
 */
function get_course()
{
    global $course;

    return array_values($course);
}

/**
 * 
 * @param  string  $semester
 * 
 * Hàm này kiểm tra coi có cái khóa học j đó hong
 * @return string
 */
function find_by_semester($semester)
{
    global $course;

    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');

}

//Controlller
$list_of_courses = get_course();

$semester = (!empty($_GET['semester'])) ? $_GET['semester'] : '';

$course_name = find_by_semester($semester);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.1</title>
</head>

<body>
    <h1>
        <?= $course_name; ?>
    </h1>
    <form action="">

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