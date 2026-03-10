<?php
require('database.php');
require('model/course_db.php');

$course_id = $_GET['course_id'];

$query = 'SELECT * FROM courses WHERE courseID = :course_id';
$statement = $db->prepare($query);
$statement->bindValue(':course_id', $course_id);
$statement->execute();
$course = $statement->fetch();
$statement->closeCursor();
?>

<h2>Update Course</h2>

<form action="index.php" method="post">

<input type="hidden" name="action" value="update_course">

<input type="hidden" name="course_id"
value="<?php echo $course['courseID']; ?>">

<label>Course Name:</label>

<input type="text" name="course_name"
value="<?php echo $course['courseName']; ?>">

<button type="submit">Update</button>

</form>