<?php
session_start();
include("db_connect.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
</head>
<body>
    <h2>Welcome, <?php echo $row['username']; ?>!</h2>
    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>

    <h3>Edit Profile</h3>
    <form method="post" action="update_profile.php">
        <label>New Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="submit" value="Update">
    </form>

    <br>
    
</body>
</html>
