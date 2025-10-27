<?php

include 'connection.php';

$sql= "select * from users";

$result= mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
         <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>All users</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> Email</th>
        <th> Phone Number </th>
        <th> Details </th>
    </tr>

    <?php

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['id']."</td>";
    echo "<td>" . $row['name'] ."</td>";
    echo "<td>" . $row['email'] ."</td>";
    echo "<td>" . $row['phone'] ."</td>";
    echo "<td><a href='cv.php?id=".$row['id']."'>Generate CV</a></td>";
    echo "</tr>";  
}
    ?>
</table>
    
</body>
</html>