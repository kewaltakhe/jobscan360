<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
    <div>
        <h1>
            Create your account

        </h1>
        <hr>
        <form action="candidate_register_db.php" method="post">
            <p> First Name<input type="text" name="fname" placeholder="First Name" required></p>
            <p> Last Name <input type="text" name="lname" placeholder="Last name"></p>
            <p>DOB <input type="date" name="birthday" required></p>
            <fieldset>
                <legend>Gender</legend>
                Male<input type="radio" name="gender" value="Male"> Female
                <input type="radio" name="gender" value="Female">
            </fieldset>
            <p>Email <input type="email" name="email" placeholder="abc@xyz.com" required></p>
            <p>Password <input type="password" name="passwd" placeholder="Enter Password" required></p> 
            <p>
                Contact No *<input type="number" name="contact_number"  placeholder="1234567890" required>
            </p>
            <p>Address <textarea name="address" cols="100" rows="8" placeholder="Address"></textarea></p>
            <p>class X % <input type="text" name="tenth" maxlength="3" placeholder="Enter your Percentage as 99 instead of 99% " required></p>
            <p>class XII % <input type="text" name="twelfth" maxlength="3" placeholder="Enter your Percentage as 99 instead of 99%" required></p>
            <p>Current CGPA <input type="text" name="cgpa" maxlength="2" placeholder="Current CGPA " required></p>
            <p>Course <input type="text" name="course" placeholder="MCA,B.tech..." required></p>
            <p>Passing Year <input type="number" name="passing_year" maxlength="4" placeholder="2024" required></p>
            <input type="submit">

        </form>
        
    </body>
</html>