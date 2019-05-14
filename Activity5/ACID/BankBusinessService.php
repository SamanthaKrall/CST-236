<?php
require_once 'Autoloader.php';
class BankBusinessService {
    function getCheckingBalance() {
        $db = new Database();
        $conn = $db->getConnection();
        $checkingService = new CheckingAccountDataService($conn);
        $balance = $checkingService->getBalance();
        $conn->close();
        return $balance;
    }
    function getSavingBalance() {
        $db = new Database();
        $conn = $db->getConnection();
        $savingService = new SavingAccountDataService($conn);
        $balance = $savingService->getBalance();
        $conn->close();
        return $balance;
    }
    function transaction() {
        $db = new Database();
        $conn = $db->getConnection();
        $conn->autocommit(false);
        $conn->begin_transaction();
        $checkingBalance = $this->getCheckingBalance();
        $checking = new CheckingAccountDataService($conn);
        $okChecking = $checking->updateBalance($checkingBalance - 100);
        $savingBalance = $this->getSavingBalance();
        $saving = new SavingAccountDataService($conn);
        $okSaving = $saving->updateBalance($savingBalance + 100);
        if($okChecking && $okSaving) {
            $conn->commit();
        } else {
            $conn->rollback();
        }
        $conn->close();
    }
}