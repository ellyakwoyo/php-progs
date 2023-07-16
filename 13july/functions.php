
<?php
//BASIC TASK MANAGER PROJECT IN PHP TO IMPLEMENT BOTH USER DEFINED AND BULT IN FUNCTIONS
// Array to store tasks
$tasks = [];

// User-defined function to add a task
function addTask($task) {
    global $tasks;
    $tasks[] = $task;
}

// User-defined function to delete a task
function deleteTask($index) {
    global $tasks;
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
    }
}

// User-defined function to list all tasks
function listTasks() {
    global $tasks;
    if (empty($tasks)) {
        echo "No tasks found.";
    } else {
        echo "Tasks:\n";
        foreach ($tasks as $index => $task) {
            echo ($index + 1) . ". $task\n";
        }
    }
}

// Adding tasks using the user-defined function
addTask("Buy groceries");
addTask("Pay bills");

// Deleting a task using the user-defined function
deleteTask(0);

// Listing tasks using the user-defined function
listTasks();

// Using a built-in function to get the number of tasks
$totalTasks = count($tasks);
echo "Total tasks: $totalTasks\n";
?>
