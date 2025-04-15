<?php
session_start();

// Sample user data (replace with your own data)
$validUsers = [
    ['username' => 'user1', 'email' => 'user1@example.com', 'password' => 'password1'],
    ['username' => 'user2', 'email' => 'user2@example.com', 'password' => 'password2']
];

$loginField = $_POST['loginField'];
$password = $_POST['password'];

$userFound = false;

foreach ($validUsers as $user) {
    if ($user['username'] === $loginField || $user['email'] === $loginField) {
        if ($user['password'] === $password) {
            $userFound = true;
            $_SESSION['username'] = $user['username'];
            break;
        }
    }
}

if ($userFound) {
    header("Location: dashboard.php"); // Redirect to dashboard or any other page
} else {
    echo "Invalid login credentials";
}
?>
