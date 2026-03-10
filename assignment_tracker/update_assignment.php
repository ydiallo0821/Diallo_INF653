<?php
require('database.php');
require('model/assignment_db.php');
require('model/course_db.php');

$assignment_id = $_GET['assignment_id'];

$query = 'SELECT * FROM assignments WHERE ID = :assignment_id';
$statement = $db->prepare($query);
$statement->bindValue(':assignment_id', $assignment_id);
$statement->execute();
$assignment = $statement->fetch();
$statement->closeCursor();

$courses = get_courses();
?>

<h2>Update Assignment</h2>

<form action="index.php" method="post">

<input type="hidden" name="action" value="update_assignment">

<input type="hidden" name="assignment_id"
value="<?php echo $assignment['ID']; ?>">

<label>Description:</label>
<input type="text" name="description"
value="<?php echo $assignment['description']; ?>">

<label>Course:</label>

<select name="course_id">

<?php foreach ($courses as $course) : ?>

<option value="<?php echo $course['courseID']; ?>"
<?php if ($course['courseID'] == $assignment['courseID']) echo "selected"; ?>>

<?php echo $course['courseName']; ?>

</option>

<?php endforeach; ?>

</select>

<button type="submit">Update</button>

</form>