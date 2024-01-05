<?
//Model
/**
 * Hàm này dùng để lấy ra mảng tuần tự của khóa học
 * @return array
 */
function get_course()
{
    include 'Data.php';

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
    include 'Data.php';

    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');

}

?>