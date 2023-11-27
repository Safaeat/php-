<?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get the minimum and maximum age values from the form
        $min_age = $_POST['min_age'];
        $max_age = $_POST['max_age'];
        
        // Establish a database connection (change the database credentials)
        $conn = new mysqli('localhost', 'username', 'password', 'your_database');
        
        // Check for a successful connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Query the database to fetch students within the specified age range
        $sql = "SELECT * FROM students WHERE age BETWEEN ? AND ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $min_age, $max_age);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Display the results in a table
        if ($result->num_rows > 0) {
            echo "<h2>Students in the Age Range $min_age - $max_age</h2>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Name</th><th>Age</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "<p>No students found in the specified age range.</p>";
        }
        
        // Close the database connection
        $stmt->close();
        $conn->close();
    }
    ?>