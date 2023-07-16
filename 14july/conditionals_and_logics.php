<?php
//dynamic task assignment using PHP to implement conditionals and logics
// Simulating user roles
$roles = [
    'admin' => 'Admin',
    'manager' => 'Manager',
    'user' => 'User'
];

// Simulating user data from the database
$users = [
    ['id' => 1, 'name' => 'John', 'role' => 'admin'],
    ['id' => 2, 'name' => 'Jane', 'role' => 'manager'],
    ['id' => 3, 'name' => 'Mark', 'role' => 'user'],
    ['id' => 4, 'name' => 'Sara', 'role' => 'user'],
    ['id' => 5, 'name' => 'Mike', 'role' => 'user']
];

// Simulating tasks data from the database
$tasks = [
    ['id' => 1, 'title' => 'Task 1', 'assigned_to' => null],
    ['id' => 2, 'title' => 'Task 2', 'assigned_to' => null],
    ['id' => 3, 'title' => 'Task 3', 'assigned_to' => null],
    ['id' => 4, 'title' => 'Task 4', 'assigned_to' => null],
    ['id' => 5, 'title' => 'Task 5', 'assigned_to' => null]
];

// Function to assign tasks dynamically
function assignTasks($users, $tasks)
{
    $assignedTasks = [];

    foreach ($tasks as $task) {
        // Find the user with the appropriate role
        $user = findUserByRole($users, 'user');

        // Assign the task to the user
        if ($user) {
            $task['assigned_to'] = $user['id'];
            $assignedTasks[] = $task;
        }
    }

    return $assignedTasks;
}

// Helper function to find a user by role
function findUserByRole($users, $role)
{
    foreach ($users as $user) {
        if ($user['role'] === $role) {
            return $user;
        }
    }

    return null;
}

// Assign tasks dynamically
$assignedTasks = assignTasks($users, $tasks);

// Display assigned tasks
foreach ($assignedTasks as $task) {
    $assignedUser = findUserById($users, $task['assigned_to']);
    echo "Task: {$task['title']}, Assigned To: {$assignedUser['name']}\n";
}

// Helper function to find a user by ID
function findUserById($users, $id)
{
    foreach ($users as $user) {
        if ($user['id'] === $id) {
            return $user;
        }
    }

    return null;
}
