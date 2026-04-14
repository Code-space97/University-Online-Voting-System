 <?php
// 	$conn = new mysqli('localhost', 'root', '', 'votesystem');

// 	if ($conn->connect_error) {
// 	    die("Connection failed: " . $conn->connect_error);
// 	}
	
// For Render.com - Using Environment Variables
$host = $_ENV['DB_HOST'] ?? 'localhost';
$user = $_ENV['DB_USER'] ?? 'root';
$pass = $_ENV['DB_PASS'] ?? '';
$db   = $_ENV['DB_NAME'] ?? 'votesystem';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// For Session in Serverless Environment
ini_set('session.save_path', '/tmp');
session_start();
?>
