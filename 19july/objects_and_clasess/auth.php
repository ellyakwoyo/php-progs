<?php
//Developing user authentication system to implement classes and objects in php.

//Implement the Registration and Authentication Logic

// auth.php

require_once('user.php');

class Auth {
    private $users = [];

    public function register($username, $email, $password) {
        // Check if the user with the same username or email already exists
        foreach ($this->users as $user) {
            if ($user->getUsername() === $username || $user->getEmail() === $email) {
                return false; // User already exists
            }
        }

        // Create a new user object and add it to the users array
        $user = new User($username, $email, $password);
        $this->users[] = $user;

        return true; // Registration successful
    }

    public function login($username, $password) {
        // Find the user with the provided username
        foreach ($this->users as $user) {
            if ($user->getUsername() === $username) {
                if ($user->verifyPassword($password)) {
                    return true; // Login successful
                } else {
                    return false; // Incorrect password
                }
            }
        }

        return false; // User not found
    }
}
?>