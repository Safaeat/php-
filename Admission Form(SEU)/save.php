<!DOCTYPE html>
<html lang="en">
<head>
    <title>SEU Admission - Form Submission</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="head">
    <img src="img.png" alt="#" />
    <h2>Admission Form</h2>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values from the form
    $code = $_POST['cid'];
    $studentId = $_POST['sid'];
    $program = $_POST['pro'];
    $session = $_POST['session'];
    $sn= $_POST['sn'];
    $sa= $_POST['sa'];
    $Place= $_POST['Place'];
    $nation= $_POST['nation1'];
    $nid= $_POST['nid1'];
    $Gender= $_POST['Gender'];
    $father= $_POST['father'];
    $fnid= $_POST['fnid'];
    $Occupation= $_POST['Occupation'];
    $Designation= $_POST['Designation'];
    $fmob= $_POST['fmob'];
    $mother= $_POST['mother'];
    $mnid= $_POST['mnid'];
    $Occupationm= $_POST['Occupationm'];
    $Designationm= $_POST['Designationm'];
    $mmob= $_POST['mmob'];
    $diff= $_POST['diff'];
    $dnid= $_POST['dnid'];
    $Occupationd= $_POST['Occupationd'];
    $Designationd= $_POST['Designationd'];
    $dmob= $_POST['dmob'];
    $village= $_POST['village'];
    $district= $_POST['district'];
    $post_off= $_POST['post_off'];
    $Police= $_POST['Police'];
    $villagep= $_POST['villagep'];
    $districtp= $_POST['districtp'];
    $post_offp= $_POST['post_offp'];
    $Policep= $_POST['Policep'];
    $smob= $_POST['smob'];
    $email= $_POST['email'];
    $money= $_POST['money'];
    $ename= $_POST['ename'];
    $rname= $_POST['rname'];
    $eaddress= $_POST['eaddress'];
    $emob= $_POST['emob'];
    $sname= $_POST['sname'];
    $roll= $_POST['roll'];
    $gpa= $_POST['gpa'];
    $Group= $_POST['Group'];
    $Board= $_POST['Board'];
    $emob= $_POST['Year'];
    $hname= $_POST['hname'];
    $hroll= $_POST['hroll'];
    $hgpa= $_POST['hgpa'];
    $hGroup= $_POST['hGroup'];
    $hBoard= $_POST['hBoard'];
    $hemob= $_POST['hYear'];
    

    // ... (retrieve other form input values as needed)

    // Display the input values
    echo "<h3>Submitted Information</h3>";
    echo "</br>Code: $code<br />";
    echo "</br>Student ID: $studentId<br />";
    echo "</br></br>Program: $program<br />";
    echo "Session: $session<br />";

    echo "</br>A. PERSONAL INFORMATION</br>";
    echo "1. Name of the Student: $sn </br></br>";
    echo "2. Date of Birth: $sa &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Place of Birth: $Place &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Citizenship/Nationality: $nation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "NID/Birth Certificate/Passport: $nid<br /></br>";

    echo "3. Gender: $Gender<br /></br>";
    
    echo "4. Father's Name: $father &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Passport/NID: $fnid &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Occupation: $Occupation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Designation: $Designation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Tel/Mob: $fmob<br /></br>";

    echo "5. Mother's Name: $mother &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Passport/NID: $mnid &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Occupation: $Occupationm &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Designation: $Designationm &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Tel/Mob: $mmob<br /> </br>";

    echo "6. Guardian's Name (if different from parents)</br>";
    echo "Name: $diff &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Passport/NID: $dnid &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Occupation: $Occupationd &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Designation: $Designationd &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Tel/Mob: $dmob<br /></br>";

    echo "7. Permanent Address</br>";
    echo "Village/House no: $village &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "District: $district &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Post Office: $post_off &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Police Station: $Police<br /></br>";
    
    echo "8. Present Address</br>";
    echo "Village/House no: $villagep &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "District: $districtp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Post Office: $post_offp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Police Station: $Policep<br /></br>";

    echo "9. Student's Tel/Mob: $smob &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "E-mail: $email</br></br>";

    echo "10. Monthly income of parents/guardian/self who will bear your
        educational expenses: $money Tk.<br /></br>";

    echo "11. Person to be notified in case of emergency</br>";
    echo "Name: $ename &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Relationship: $rname &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Address: $eaddress &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Tel/Mob: $emob<br /></br>";
  
    echo "B. EDUCATIONAL INFORMATION</br>";
    echo "1. SSC/O' Level/Equivalent</br>";
    echo "Name of the Institution: $sname";
    echo "Roll No: $roll &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "GPA: $gpa &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Group: $Group &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Board: $Board &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Year: $Year:</br</br>";

    echo "1. HSC/A' Level/Equivalent</br>";
    echo "Name of the Institution: $hname";
    echo "Roll No: $hroll &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "GPA: $hgpa &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Group: $hGroup &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Board: $hBoard &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Year: $hYear:</br</br>";


    // ... (display other form input values as needed)
}
?>

</body>
</html>
