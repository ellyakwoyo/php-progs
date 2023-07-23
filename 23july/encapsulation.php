<?php

class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getAccountHolder() {
        return $this->accountHolder;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount\n";
        } else {
            echo "Invalid deposit amount.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount\n";
        } else {
            echo "Invalid withdrawal amount or insufficient balance.\n";
        }
    }
}

// Creating a bank account
$account = new BankAccount('123456789', 'John Doe', 1000);

// Accessing account details using getters
echo "Account Number: " . $account->getAccountNumber() . "\n";
echo "Account Holder: " . $account->getAccountHolder() . "\n";
echo "Account Balance: " . $account->getBalance() . "\n";

// Making deposits and withdrawals
$account->deposit(500);
$account->withdraw(200);
$account->withdraw(1500);

// Attempting to access private properties directly (will cause an error)
// echo $account->accountNumber; // Throws an error because it's private

?>
