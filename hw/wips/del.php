<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $con = mysqli_connect("localhost", "root", "", "red");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $student_id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "DELETE FROM student WHERE id = $student_id";

    if (mysqli_query($con, $sql)) {
        echo "Student with ID $student_id has been deleted successfully.";
    } else {
        echo "Error deleting student: " . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    echo "Invalid student ID provided.";
}
echo "</br><a href='index.html'>Go to Home</a>";
?>
