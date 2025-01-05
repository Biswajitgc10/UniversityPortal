<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM form";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo "id: ". $row["first_name"].   "Email: " . $row["email"].     "comment: " . $row["comment"].  "subject: " . $row["subject"]. "  " ;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>