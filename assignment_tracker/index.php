<?php
require('database.php');
require('model/assignment_db.php');
require('model/course_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == 'update_assignment') {

    $assignment_id = filter_input(INPUT_POST, 'assignment_id');
    $description = filter_input(INPUT_POST, 'description');
    $course_id = filter_input(INPUT_POST, 'course_id');

    update_assignment($assignment_id, $description, $course_id);

    header("Location: index.php");
    exit();
}

if ($action == 'update_course') {

    $course_id = filter_input(INPUT_POST, 'course_id');
    $course_name = filter_input(INPUT_POST, 'course_name');

    update_course($course_id, $course_name);

    header("Location: index.php");
    exit();
}

$courses = get_courses();
$assignments = get_assignments(null);

include('view/header.php');
?>

<h2>Assignments</h2>

<table border="1">

<tr>
<th>Description</th>
<th>Course ID</th>
<th>Update</th>
</tr>

<?php foreach ($assignments as $assignment) : ?>

<tr>

<td><?php echo $assignment['description']; ?></td>

<td><?php echo $assignment['courseID']; ?></td>

<td>
<a href="update_assignment.php?assignment_id=<?php echo $assignment['ID']; ?>">
Update
</a>
</td>

</tr>

<?php endforeach; ?>

</table>

<?php include('view/footer.php'); ?>