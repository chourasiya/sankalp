<Doctype! html>
<head>
<link rel='icon' type='image/png' href='images/logo.png'>
<title>Event</title>
<link rel="stylesheet" href="droppart.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
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
$stmt = $conn->prepare("INSERT INTO participant (firstname, year, email, collagename, contact) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstname, $year, $email, $collagename, $contact);

// set parameters and execute
$firstname = $_POST["fname"];
$year = $_POST["lname"];
$email = $_POST["ename"];
$collagename = $_POST["clgname"];
$contact = $_POST["cname"];
$stmt->execute();
$pid = mysqli_insert_id($conn);

echo "You have been registered successfully as participant of Sankalp IITR.";
$stmt->close();
$conn->close();
?>
<dl class="dropdown"> 
	<form action="welcm.php" method="post">
	    <dt>
	    <a href="#">
	      <span class="hida">Select Event</span>    
	      <p class="multiSel"></p>  
	    </a>
	    </dt>
	  
	    <dd>
	        <div class="mutliSelect">
	            <ul>
	                <li>
	                    <input type="checkbox" name="events[]" value="Rejuvenation" />Rejuvenation</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Halla Bol" />Halla Bol(Nukkad Natk)</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Vogue" />Traditional Walk(Vogue)</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Band Bash 16" />Band Bash 16</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Empresario" />Empresario</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Paradigm" />Paradigm</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Secularism" />Secularism</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Social Entrepreneurship" />Social Entrepreneurship</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Sociathon" />Sociathon</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Utopia" />Utopia (Case Study)</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Quarry Quandary" />Quarry Quandary</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Rethinking Capital" />Rethinking Capital</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Raahgirii" />Raahgirii</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Guest Lectures" />Guest Lectures</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Youth Parliament" />Youth Parliament</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Pixelate" />Pixelate</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Carpediem" />Carpediem</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Itsy Bitsy Stories" />Itsy Bitsy Stories</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Cartoon Cap" />Cartoon Cap</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Teezing" />Teezing</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Road Safety" />Road Safety</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Cyber Security and Awareness" />Cyber Security and Awareness</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="The Three QS-IQ,EQ and SQ" />The Three QS-IQ,EQ and SQ</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Stemcell Donation" />Stemcell Donation</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Anwar Education Society" />Anwar Education Society</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Save The Quest" />Save The Quest</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Anushruti" />Anushruti</li>
	                <li>
	                    <input type="checkbox" name="events[]" value="Iskcon" />Iskcon</li>
		            </ul>
		        </div>
		    </dd>
		    <input type="hidden" name="name" value=<?php echo $_POST['fname'];?> />
		    <input type="hidden" name="pid" value=<?php echo $pid;?> />
		    <button type="submit">SUBMIT</button>
	</form>
</dl>
<script src="droppart.js"></script>
</body>
s</html>