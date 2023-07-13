<html>
    <head>
        <title>Candidate Dashboard</title>
    </head>
    <body>
        <?php include("candidate_session.php")?>
        <ul>
            <li><a href="candidate_dashboard.php">Dashboard</a></li>
            <li><a href="#vaccancy">View Vacancy</a></li>
            <li><a href="../accounts/candidate_logout.php">Log out</a></li>
        </ul>
        <div class="container">
            <h1>Students Details</h1>
            <h2>Student ID : <?php echo $candidate_id ?> </h2>
            <h2>Student name :  <?php echo $firstname.' '.$lastname ?></h2>
            <h2>Student Email : <?php echo $email ?> </h2>
            <h2>Student DOB : <?php echo $dob ?> </h2>
            <h2>Student Gender : <?php echo $gender ?> </h2>
            <h2>Student Mobile : <?php echo $mobile ?> </h2>
            <h2>Student Course : <?php echo $course ?> </h2>
            <h2>Student Passing Year : <?php echo $passing_year ?> </h2>

    </div>
    </body>
</html>