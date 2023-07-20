<?php
//Developing user authentication system to implement classes and objects in php.
//Test the Registration and Authentication
//Test.php
// test.php

require_once('auth.php');

$auth = new Auth();

// Register a new user
if ($auth->register('john_doe', 'john@example.com', 'password123')) {
    echo "Registration successful!<br>";
} else {
    echo "Username or email already exists.<br>";
}

// Try to register the same user again (should fail)
if ($auth->register('john_doe', 'john@example.com', 'password123')) {
    echo "Registration successful!<br>";
} else {
    echo "Username or email already exists.<br>";
}

// Login with valid credentials
if ($auth->login('john_doe', 'password123')) {
    echo "Login successful!<br>";
} else {
    echo "Incorrect username or password.<br>";
}

// Login with incorrect password
if ($auth->login('john_doe', 'wrong_password')) {
    echo "Login successful!<br>";
} else {
    echo "Incorrect username or password.<br>";
}

// Login with non-existing user
if ($auth->login('non_existing_user', 'password123')) {
    echo "Login successful!<br>";
} else {
    echo "Incorrect username or password.<br>";
}


?>