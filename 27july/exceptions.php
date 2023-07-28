<?php

class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        if ($initialBalance < 0) {
            throw new InvalidArgumentException("Initial balance cannot be negative.");
        }
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Deposit amount should be positive.");
        }
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Withdrawal amount should be positive.");
        }

        if ($amount > $this->balance) {
            throw new Exception("Insufficient funds.");
        }

        $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Example usage:
try {
    $account = new BankAccount(1000);
    $account->deposit(500);
    $account->withdraw(200);
    $account->withdraw(2000); // This will throw an exception due to insufficient funds
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>