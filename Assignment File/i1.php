<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h2>Submitted Information</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $nid = $_POST["nid"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];


        echo "<p>Name: $name</p>";
        echo "<p>NID Number: $nid</p>";
        echo "<p>Mobile Number: $mobile</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Gender: $gender</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>

    <p><a href="index.html">Go back to the form</a></p>
</body>
</html>
