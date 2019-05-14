<?php
require_once 'Autoloader.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
$db = new Database();
$conn = $db->getConnection();
$checking = new CheckingAccountDataService($conn);
$saving = new SavingAccountDataService($conn);
$checkBalance = $checking->getBalance();
$savingBalance = $saving->getBalance();
echo "Current values: <br>"; 
echo "Checking balance: $" . $checkBalance . "<br>";
echo "Saving balance: $" . $savingBalance . "<br>";
echo "Transfer $100 from checking to savings<br>";
$checking->updateBalance($checkBalance - 100);
$saving->updateBalance($savingBalance + 100);
$checkBalance = $checking->getBalance();
$savingBalance = $saving->getBalance();
echo "Current values:<br>";
echo "Checking balance: $" . $checkBalance . "<br>";
echo "Saving balance: $" . $savingBalance . "<br>";
*/
$service = new BankBusinessService();
echo "Initial checking balance is: $" . $service->getCheckingBalance() . "<br>";
echo "Initial savings balance is: $" . $service->getSavingBalance() . "<br>";
$service->transaction();
echo "New checking balance is: $" . $service->getCheckingBalance() . "<br>";
echo "New savings balance is: $" . $service->getSavingBalance() . "<br>";
