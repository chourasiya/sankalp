
<?php
$servername = "182.50.133.90:3306";
$username = "sankalp";
$password = "eqb}$+eBWW?7{5Ws";
$dbname = "sankalp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO CampusAmbassador (firstname, year, email, collagename, contact) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstname, $year, $email, $collagename, $contact);

// set parameters and execute
$firstname = $_POST["fname"];
$year = $_POST["lname"];
$email = $_POST["ename"];
$collagename = $_POST["clgname"];
$contact = $_POST["cname"];
$stmt->execute();

echo "You have been registered successfully as the Campus Ambassador of Sankalp IITR.";

$stmt->close();
$conn->close();
?>