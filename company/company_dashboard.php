<html>
    <head>
        <title>Company Dashboard</title>
    </head>
    <body>
        <?php include("company_session.php")?>
        <ul>
            <li><a href="company_dashboard.php">Company Dashboard</a></li>
            <li><a href="company_job.php">Create Job Vacancy</a></li>
            <li><a href="../accounts/company_logout.php">Log out</a></li>
        </ul>
        <div>
            <h1>Company Details</h1>
            <h2>Company ID : <?php echo $cid ?> </h2>
            <h2>Company name :  <?php echo $company_name ?></h2>
            <h2>Company contact: <?php echo $contact_no ?></h2>
            <h2>Company Email : <?php echo $email ?> </h2>
            <h2>Company CEO : <?php echo $ceo ?> </h2>
            <h2>Company CTO : <?php echo $cto ?> </h2>
            <h2>Company Location : <?php echo $address ?> </h2>
        </div>
        <div>
            <h1>Job Created</h1>
            <?php
                $sql = "select * from jobs where company_id='$cid'";
                $result = $conn->query($sql);
                $row_count = $result->num_rows;
                if ($row_count == 0){
                    echo "no job created.";
                }else{
                    while($row=$result->fetch_assoc())
                    {?>
                    <h5><?php echo $row['job_id'] ?></h5>
                    <h5><?php echo $row['job_prof'] ?></h5>
                    <?php }
                }?>
        </div>
    </body>
</html>