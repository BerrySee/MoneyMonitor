<?php
class DB {
    //db connection variables
private $dbHost = "localhost";
private $dbUser = "root";
private $dbPassword = "gizike94";
private $dbName ="finance";
private $conn;

public function __construct() {
    //error handling
    try {
        $dsn ="mysql:host=".$this->dbHost. ";dbname=".$this->dbName;
        $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
    } catch(PDOException $e){
        die("DB connection failed: ".$e->getMessage());
    } 
}
public function incomeMoney($name, $type, $amount, $date) {
    $sql = "INSERT INTO income (name, type, amount, date, constant) VALUES (:name, :type, :amount, :date, 1)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name'=>$name, 'type'=>$type, 'amount'=>$amount, 'date'=>$date]);
    echo "data inserted";
}
public function expenseMoney($name, $type, $amount, $date) {
    $sql = "INSERT INTO outcome (name, type, amount, date, constant) VALUES (:name, :type, :amount, :date, 0)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name'=>$name, 'type'=>$type, 'amount'=>$amount, 'date'=>$date]);
    echo "data inserted";
}
public function lastActions() {
    $sql = "SELECT * FROM income
UNION
SELECT * FROM outcome
ORDER BY Date DESC LIMIT 10";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

 public function gettotal() {
    $sql = "SELECT (SELECT SUM(amount) FROM income) - (SELECT SUM(amount) FROM outcome)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $total = $stmt->fetch(PDO::FETCH_ASSOC);
    return $total;
 }

 public function getHistory() {
     $sql = "SELECT * FROM income
UNION
SELECT * FROM outcome
ORDER BY Date DESC";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $history = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $history;
 }

 public function deleteRow($id, $constant) {
    $sql  ="DELETE FROM income WHERE id = :id AND constant = :constant;
    DELETE FROM outcome WHERE id = :id AND constant = :constant;
    ";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id'=>$id, 'constant'=>$constant]);
    echo "Deleted record";
}
}
?>