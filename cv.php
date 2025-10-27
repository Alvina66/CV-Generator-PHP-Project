<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $row['name']; ?> - CV</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6fa;
      margin: 0;
      padding: 20px;
      color: #333;
    }

    .cv-container {
      max-width: 850px;
      background: #fff;
      margin: 30px auto;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    h1 {
      color: #2b4eff;
      margin-bottom: 10px;
      font-size: 2rem;
      border-bottom: 2px solid #2b4eff;
      padding-bottom: 8px;
    }

    h2 {
      color: #2b4eff;
      border-bottom: 1px solid #e0e0e0;
      padding-bottom: 5px;
      margin-top: 30px;
    }

    p {
      margin: 6px 0;
      line-height: 1.6;
    }

    .section {
      margin-top: 20px;
    }

    .btn-back {
      display: inline-block;
      margin-top: 30px;
      background: #2b4eff;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
    }

    .btn-back:hover {
      background: #1f37b1;
    }

    .info {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="cv-container">
    <h1><?php echo $row['name']; ?></h1>
    <div class="info">
      <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
      <p><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
      <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
      <p><strong>LinkedIn:</strong> <a href="<?php echo $row['linkedin']; ?>"><?php echo $row['linkedin']; ?></a></p>
      <p><strong>Portfolio:</strong> <a href="<?php echo $row['portfolio']; ?>"><?php echo $row['portfolio']; ?></a></p>
    </div>

    <div class="section">
      <h2>Education</h2>
      <p><strong>Degree:</strong> <?php echo $row['education']; ?></p>
      <p><strong>Institute:</strong> <?php echo $row['institute']; ?></p>
      <p><strong>Duration:</strong> <?php echo $row['edu_start']; ?> - <?php echo $row['edu_end']; ?></p>
      <p><strong>CGPA / Grade:</strong> <?php echo $row['cgpa']; ?></p>
    </div>

    <div class="section">
      <h2>Work Experience</h2>
      <p><strong>Job Title:</strong> <?php echo $row['job_title']; ?></p>
      <p><strong>Company:</strong> <?php echo $row['company']; ?></p>
      <p><strong>Duration:</strong> <?php echo $row['job_start']; ?> - <?php echo $row['job_end']; ?></p>
    </div>

    <div class="section">
      <h2>Skills</h2>
      <p><?php echo nl2br($row['skills']); ?></p>
    </div>

    <div class="section">
      <h2>Projects</h2>
      <p><strong><?php echo $row['project_title']; ?></strong></p>
      <p><?php echo nl2br($row['project_desc']); ?></p>
    </div>

    <div class="section">
      <h2>Certifications</h2>
      <p><strong>Certificate:</strong> <?php echo $row['cert_title']; ?></p>
      <p><strong>Issued By:</strong> <?php echo $row['cert_org']; ?></p>
      <p><strong>Date:</strong> <?php echo $row['cert_date']; ?></p>
    </div>

    <div class="section">
      <h2>Languages</h2>
      <p><?php echo nl2br($row['languages']); ?></p>
    </div>

    <div class="section">
      <h2>Hobbies / Interests</h2>
      <p><?php echo nl2br($row['hobbies']); ?></p>
    </div>

    <div class="section">
      <h2>Declaration</h2>
      <p><?php echo nl2br($row['declaration']); ?></p>
    </div>

    <a href="read.php" class="btn-back">⬅ Back to All Users</a>
  </div>

</body>
</html>

<?php
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
?>
