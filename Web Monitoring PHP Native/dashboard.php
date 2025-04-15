<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dsb.css" />
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
        echo "<a href='logout.php'>Logout</a>";
    } else {
        header("Location: index.php");
    }
    ?>
</body>
</html>
