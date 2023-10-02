<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>

    <?php
    // Check if an ID is provided in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Connect to the database
        $con = mysqli_connect("localhost", "root", "", "red");

        // Check for a successful connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the student's information from the database
        $sql = "SELECT * FROM student WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Display a form to edit the student's information
            echo "<form method='post' action='update.php'>";
            echo "ID:<input type='number' name='id' value='" . $row['id'] . "'></br>";
            echo "Name: <input type='text' name='name' value='" . $row['name'] . "'><br>";
            echo "Age: <input type='number' name='age' value='" . $row['age'] . "'><br>";
            echo "<input type='submit' name='submit' value='Update'>";
            echo "</form>";
        } else {
            echo "Student not found.";
        }

        // Close the database connection
        mysqli_close($con);
    } else {
        echo "No student ID provided.";
    }
    ?>

    <br>
    <a href='index.html'>Go to Home</a>
</body>
</html>
