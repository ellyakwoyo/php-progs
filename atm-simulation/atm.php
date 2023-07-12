<?php
// Account information
$accountNumber = "123456789";
$pin = "1234";
$balance = 1000;

// Function to check account balance
function checkBalance() {
    global $balance;
    return $balance;
}

// Function to withdraw money from account
function withdrawMoney($amount) {
    global $balance;

    // Check if account balance is sufficient for withdrawal
    if ($balance >= $amount) {
        $balance -= $amount;
        return true;
    } else {
        return false;
    }
}

// Example usage: Check account balance
echo "Account Balance: $" . checkBalance() . "\n";

// Example usage: Withdraw money
$withdrawAmount = readline("Enter Withdrawal amount: ");
if (withdrawMoney($withdrawAmount)) {
    echo "Withdrawal Successful. New Account Balance: $" . checkBalance() . "\n";
} else {
    echo "Insufficient balance.\n";
}
?>
