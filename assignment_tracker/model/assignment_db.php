<?php
function get_assignments($course_id) {
    global $db;

    if ($course_id) {
        $query = 'SELECT * FROM assignments
                  WHERE courseID = :course_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':course_id', $course_id);
    } else {
        $query = 'SELECT * FROM assignments';
        $statement = $db->prepare($query);
    }

    $statement->execute();
    $assignments = $statement->fetchAll();
    $statement->closeCursor();
    return $assignments;
}

function add_assignment($course_id, $description) {
    global $db;

    $query = 'INSERT INTO assignments
              (courseID, description)
              VALUES
              (:course_id, :description)';

    $statement = $db->prepare($query);
    $statement->bindValue(':course_id', $course_id);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();
}

function delete_assignment($assignment_id) {
    global $db;

    $query = 'DELETE FROM assignments
              WHERE ID = :assignment_id';

    $statement = $db->prepare($query);
    $statement->bindValue(':assignment_id', $assignment_id);
    $statement->execute();
    $statement->closeCursor();
}

function update_assignment($assignment_id, $description, $course_id) {
    global $db;

    $query = 'UPDATE assignments
              SET description = :description,
                  courseID = :course_id
              WHERE ID = :assignment_id';

    $statement = $db->prepare($query);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':course_id', $course_id);
    $statement->bindValue(':assignment_id', $assignment_id);
    $statement->execute();
    $statement->closeCursor();
}
?>