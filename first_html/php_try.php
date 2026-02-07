<!DOCTYPE html>
<html>
<head>
    <title>PHP with HTML Example</title>
</head>
<body>

<h2>Simple Contact Form</h2>

<!-- HTML FORM php ko file (like data)server ma post garya-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<br>

<!-- PHP CODE -->
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h3>Form Data Received:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}
?>

<?php
// Database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Step 1: Create connection first
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // optional
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Step 2: Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h3>Form Data Received:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";

    // Step 3: Insert into database
    try {
        $stmt = $conn->prepare("INSERT INTO contacts (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "<p style='color:green;'>Data saved to database successfully!</p>";
    } catch(PDOException $e) {
        echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}
?>


?>

</body>
</html>
