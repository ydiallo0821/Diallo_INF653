<?php
function get_courses() {
    global $db;

    $query = 'SELECT * FROM courses';
    $statement = $db->prepare($query);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function update_course($course_id, $course_name) {
    global $db;

    $query = 'UPDATE courses
              SET courseName = :course_name
              WHERE courseID = :course_id';

    $statement = $db->prepare($query);
    $statement->bindValue(':course_name', $course_name);
    $statement->bindValue(':course_id', $course_id);
    $statement->execute();
    $statement->closeCursor();
}
?>