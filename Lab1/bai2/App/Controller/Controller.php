<?
include '../Model/Model.php';

//Controlller
$list_of_courses = get_course();

$semester = (!empty($_GET['semester'])) ? $_GET['semester'] : '';

$course_name = find_by_semester($semester);



include '../Views/view.php';

?>