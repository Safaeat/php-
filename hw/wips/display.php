<?php
echo "<h2>Student Information</h2>";
echo "<table border='1'>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
      </tr>";
 $con=mysqli_connect("localhost","root","","red");
 $sql="select * FROM student";
 $res=mysqli_query($con,$sql);

  while($row=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td>";
    echo "<td>" . $row["name"]. "</td>";
    echo "<td>" . $row["age"]. "</td>";
    echo "</tr>";
  }
echo "</table>";
echo "<a href='index.html'>Go to Home</a>";
?>
