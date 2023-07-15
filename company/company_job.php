<html>
    <head>

    </head>
    <body>
        <?php
        include("company_session.php");
        ?>
        <ul>
            <li><a href="company_dashboard.php">Company Dashboard</a></li>
            <li><a href="company_job.php">Create Job Vacancy</a></li>
            <li><a href="../accounts/company_logout.php">Log out</a></li>
        </ul>
        <div class="form-box">
        <h1 class="main_header">
            Create new job
        </h1>
        <hr>
        <form action="company_job_register.php" method="post">
            <p> Job Profile <input type="text" name="jname" placeholder="Job Name" required></p>
            <p> Salary <input type="number" name="sal" placeholder="650000" required></p>
            <p> Deadline <input type="date" name="deadline" placeholder="22/02/2024" required></p>
            <p> Job location <input type="text" name="loc" placeholder="Banglore" required></p>
            <fieldset>
                <legend>Minimum Requirements</legend>
                <span> Min CGPA <input type="number" name="cgpa" placeholder="8" min="0" max="10" style="width:15%;" required></span>
                <span> Course <input type="text" name="course" placeholder="MCA" style="width:15%;" required></span>
                <span> Year <input type="date" name="year" placeholder="1" style="width:15%;" required></span>
                <span> Max Age <input type="number" name="age" placeholder="18" min="17" max="30" style="width:15%;" required></span>
            </fieldset>
            <input type="submit">
        </form>
    </div>
    </body>
</html>