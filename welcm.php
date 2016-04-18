
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

$stmt = $conn->prepare("INSERT INTO event (participation_id, participant_name, event_name) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $pid, $name, $events);

// set parameters and execute
$name = $_POST["name"];
$pid = $_POST["pid"];
$events = implode(",",$_POST["events"]);
$stmt->execute();

echo "You have been registered successfully for the Events of Sankalp IITR<br /><br /><br />";
echo"Thankyou<br /><br />";
echo "for payment now";
?>
 <button onclick="popup('sankalp');" class="tsbutton">Pay Now</button>
 <noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript>
 <script src="//www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script>
<?php

$stmt->close();
$conn->close();

/*var_dump($_POST['name']);
var_dump($_POST["events"]);*/

/*$name = $_POST["name"];
$events = implode(",",$_POST["events"]);
var_dump($name);
var_dump($events);*/

?>