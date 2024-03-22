<?php
require_once './src/dbconn.php';

// Fetch the sale ID from the URL
$saleId = $_GET['sale'];

// Get PDO instance
$database = Database::getInstance();
$pdo = $database->connect();

// Query for sale details
$sqlSale = "SELECT * FROM Sales WHERE SaleID = ?";
$stmtSale = $pdo->prepare($sqlSale);
$stmtSale->execute([$saleId]);
$sale = $stmtSale->fetch(PDO::FETCH_ASSOC);

// Query for customer details
$sqlCustomer = "SELECT * FROM Customers WHERE CustomerID = ?";
$stmtCustomer = $pdo->prepare($sqlCustomer);
$stmtCustomer->execute([$sale['CustomerID']]);
$customer = $stmtCustomer->fetch(PDO::FETCH_ASSOC);

// Query for sale items
$sqlItems = "SELECT * FROM SaleDetails INNER JOIN Products ON SaleDetails.ProductID = Products.ProductID WHERE SaleID = ?";
$stmtItems = $pdo->prepare($sqlItems);
$stmtItems->execute([$saleId]);
$items = $stmtItems->fetchAll(PDO::FETCH_ASSOC);
?>