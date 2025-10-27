<?php  

include'connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $linkedin = $_POST['linkedin'];
    $portfolio = $_POST['portfolio'];
    $education = $_POST['education'];
    $institute = $_POST['institute'];
    $edu_start = $_POST['edu_start'];
    $edu_end = $_POST['edu_end'];
    $cgpa = $_POST['cgpa'];
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $job_start = $_POST['job_start'];
    $job_end = $_POST['job_end'];
    $skills = $_POST['skills'];
    $project_title = $_POST['project_title'];
    $project_desc = $_POST['project_desc'];
    $cert_title = $_POST['cert_title'];
    $cert_org = $_POST['cert_org'];
    $cert_date = $_POST['cert_date'];
    $languages = $_POST['languages'];
    $hobbies = $_POST['hobbies'];
    $declaration = $_POST['declaration'];

    $sql="insert into users(name, email, phone, address, linkedin, portfolio, education, institute, edu_start, edu_end, cgpa, job_title, company, job_start, job_end, skills, project_title, project_desc, cert_title, cert_org, cert_date, languages, hobbies, declaration) values('$name', '$email', '$phone', '$address', '$linkedin', '$portfolio', '$education', '$institute', '$edu_start', '$edu_end', '$cgpa', '$job_title', '$company', '$job_start', '$job_end', '$skills', '$project_title', '$project_desc', '$cert_title', '$cert_org', '$cert_date', '$languages', '$hobbies', '$declaration')";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted successfully.";
        echo "<a href='read.php'>View All Users</a>";
         echo "<p class='success'>Your CV information has been saved in the database.</p>";
        echo "<a href='index.html'>Go Back</a>";
        exit();
    }
    else{
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

?>