<!DOCTYPE html>
<html>
<head>
<title>Admission Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <?php include "db.php"?>
    <section class="header">
        <div class="container">
            <div class="head-info">
                <div class="img"><img src="logo.png"></div>
                <h3>SOUTHEAST UNIVERSITY</h3>
                <span>Permanent Campus: 251/A & 252, Tejgaon I/A, Dhaka 1208, Bangladesh<br>
                Tel: 8878502, 8878497, 8870474, 8870475, 8870476, Ext: 114, 110<br>
                Admission Oce: House 64, Road 18, Block B, Banani, Dhaka 1213, Bangladesh<br>
                Tel: 55034135, 55034125-28, 55034192, Cell: 01766348518, 01911781327, 01632261081<br>
                Web: www.seu.edu.bd, Facebook: facebook.com/seu.ocial.info
                </span>
                 
            </div>
        </div>
          <section>
        <div class="container">
            <div class="app-info">
                <h3>SOUTHEAST UNIVERSITY</h3>
                <span>The candidate must enclose the following documents with this application form <br>
                1. Attested copies of all academic certicates & mark sheets.<br>
                2. 4 Copies photograph (passport size).<br>
                3. Original certicates & mark sheets will have to be produced at the time of admission.

                </span>
                 
            </div>
        </div>
       </section>
    </section>
  
<form>

    <!-- Student's Details -->
    <fieldset>
        <legend>Student's Details</legend>
        <label for="studentsName">Student's Name:</label>
        <input type="text" id="studentsName" name="studentsName"><br><br>
        <legend>Name of Program</legend>
        <label for="Nameofprg"></label>
        <input type="text" id="studentsName" name="studentsName"><br><br>
        <label for="fathersContact">Tel/Mob:</label>
        <input type="text" id="fathersContact" name="fathersContact">
        <label for="fathersOccupation">Date of birth</label>
        <input type="date" id="date" name="date"><br><br>
        <label for="fathersDesignation">Designation:</label>
        <input type="text" id="fathersDesignation" name="fathersDesignation"><br><br>
        
    </fieldset>
    <br>
    
    <!-- Father's Details -->
    <fieldset>
        <legend>Father's Details</legend>
        <label for="fathersName">Father's Name:</label>
        <input type="text" id="fathersName" name="fathersName"><br><br>
        <label for="fathersOccupation">Occupation:</label>
        <input type="text" id="fathersOccupation" name="fathersOccupation"><br><br>
        <label for="fathersDesignation">Designation:</label>
        <input type="text" id="fathersDesignation" name="fathersDesignation"><br><br>
        <label for="fathersContact">Tel/Mob:</label>
        <input type="text" id="fathersContact" name="fathersContact">
    </fieldset>
    <br>
    
    <!-- Mother's Details -->
    <fieldset>
        <legend>Mother's Details</legend>
        <label for="mothersName">Mother's Name:</label>
        <input type="text" id="mothersName" name="mothersName"><br><br>
        <label for="mothersOccupation">Occupation:</label>
        <input type="text" id="mothersOccupation" name="mothersOccupation"><br><br>
        <label for="mothersDesignation">Designation:</label>
        <input type="text" id="mothersDesignation" name="mothersDesignation"><br><br>
        <label for="mothersContact">Tel/Mob:</label>
        <input type="text" id="mothersContact" name="mothersContact">
    </fieldset>
    <br>
    
    <!-- Guardian's Details (if different from parents) -->
    <fieldset>
        <legend>Guardian's Details (if different from parents)</legend>
        <label for="guardiansName">Guardian's Name:</label>
        <input type="text" id="guardiansName" name="guardiansName"><br><br>
        <label for="guardiansOccupation">Occupation:</label>
        <input type="text" id="guardiansOccupation" name="guardiansOccupation"><br><br>
        <label for="guardiansDesignation">Designation:</label>
        <input type="text" id="guardiansDesignation" name="guardiansDesignation"><br><br>
        <label for="guardiansContact">Tel/Mob:</label>
        <input type="text" id="guardiansContact" name="guardiansContact">
    </fieldset>
    <br>
    
    <!-- Permanent Address -->
    <fieldset>
        <legend>Permanent Address</legend>
        <label for="permanentAddress">Address:</label>
        <textarea id="permanentAddress" name="permanentAddress"></textarea>
    </fieldset>
    <br>
    
    <!-- Present Address -->
    <fieldset>
        <legend>Present Address</legend>
        <label for="presentAddress">Address:</label>
        <textarea id="presentAddress" name="presentAddress"></textarea>
    </fieldset>
    <br>
    
    <!-- Student's Contact Details -->
    <fieldset>
        <legend>Student's Contact Details</legend>
        <label for="studentsContact">Tel/Mob:</label>
        <input type="text" id="studentsContact" name="studentsContact"><br><br>
        <label for="studentsEmail">E-mail:</label>
        <input type="email" id="studentsEmail" name="studentsEmail">
    </fieldset>
    <br>
    
    <!-- Monthly Income -->
    <fieldset>
        <legend>Monthly Income</legend>
        <label for="monthlyIncome">Monthly Income:</label>
        <input type="text" id="monthlyIncome" name="monthlyIncome">
    </fieldset>
    <br>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>
