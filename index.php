<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Maker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Welcome to CV Maker</h1>
  <p>Create your professional CV.</p>

  <form action="process.php" method="post">

    <h2>Personal Information</h2>

    <label for="name">Name</label>
    <input required type="text" name="name" id="name" placeholder="Enter your name">

    <label for="email">Email</label>
    <input required type="email" name="email" id="email" placeholder="Enter your email">

    <label for="phone">Phone</label>
    <input required type="text" name="phone" id="phone" placeholder="Enter your phone number">

    <label for="address">Address</label>
    <input required type="text" name="address" id="address" placeholder="Enter your address">

    <label for="linkedin">LinkedIn Profile</label>
    <!-- FIXED: 'inpu' → 'input' -->
    <input  type="url" name="linkedin" id="linkedin" placeholder="Enter your LinkedIn profile URL">

    <!-- FIXED: invalid id name (no / in id) -->
    <label for="portfolio">Portfolio / GitHub</label>
    <input  type="url" name="portfolio" id="portfolio" placeholder="Enter your Portfolio or GitHub URL">

    <h2>Education</h2>

    <label for="education">Degree / Qualifications</label>
    <input  type="text" name="education" id="education" placeholder="Enter your degree or qualifications">

    <label for="institute">Institute / University</label>
    <!-- FIXED: spelling of 'institute' -->
    <input  type="text" name="institute" id="institute" placeholder="Enter your institute or university">

    <label for="edu_start">Start Year</label>
    <input  type="text" name="edu_start" id="edu_start" placeholder="Enter start year">

    <label for="edu_end">End Year</label>
    <input  type="text" name="edu_end" id="edu_end" placeholder="Enter end year">

    <label for="cgpa">Grade / CGPA</label>
    <input  type="text" name="cgpa" id="cgpa" placeholder="Enter your grade or CGPA">

    <h2>Work Experience</h2>

    <!-- FIXED: removed space in 'for' and id -->
    <label for="job_title">Job Title</label>
    <input  type="text" name="job_title" id="job_title" placeholder="Enter your job title">

    <label for="company">Company</label>
    <input type="text" name="company" id="company">

    <label for="job_start">Start Date</label>
    <input type="text" name="job_start" id="job_start">

    <label for="job_end">End Date</label>
    <input type="text" name="job_end" id="job_end">

    <h2>Skills</h2>
    <textarea name="skills" placeholder="E.g., C, Java, HTML, CSS, JS, SQL" rows="3"></textarea>

    <h2>Projects</h2>
    <label for="project_title">Project Title</label>
    <input type="text" name="project_title" id="project_title">

    <label for="project_desc">Description</label>
    <textarea name="project_desc" id="project_desc" rows="3"></textarea>

    <h2>Certifications</h2>
    <label for="cert_title">Certificate Title</label>
    <input type="text" name="cert_title" id="cert_title">

    <label for="cert_org">Issued By</label>
    <input type="text" name="cert_org" id="cert_org">

    <label for="cert_date">Date of Completion</label>
    <input type="text" name="cert_date" id="cert_date">

    <h2>Languages</h2>
    <textarea name="languages" placeholder="E.g., English (Fluent), Urdu (Native)" rows="2"></textarea>

    <h2>Hobbies / Interests</h2>
    <textarea name="hobbies" rows="2"></textarea>

    <h2>Declaration</h2>
    <textarea name="declaration" rows="2" placeholder="I hereby declare that the above information is true to the best of my knowledge."></textarea>

    <button type="submit">Generate CV</button>

  </form>
</body>
</html>
