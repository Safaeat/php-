<?php
echo "<h2>Student Information is successfully registered.</h2>";

{
    $con=mysqli_connect("localhost","root","","red");
    $id = $_POST['sid'];
    echo "<br>";
    $name=$_POST['sn'];
    echo "<br>";
    $age=$_POST['sa'];
    echo "<br>";
    $sql = "insert into student (`id`, `name`, `age`) VALUES ('$id', '$name', '$age')";
    mysqli_query($con,$sql);
}
echo "<a href='display.php'>Check the List of Students Information</a>";
?>
