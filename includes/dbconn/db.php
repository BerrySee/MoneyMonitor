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
        // 3 paraméter a DB conn-hoz
        $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
        /*itt megadhatunk előre attributokat 
        pl: PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ
        return the value as OBJ by default*/
    } catch(PDOException $e){
        //error message 
        die("DB connection failed: ".$e->getMessage());
    } 
}
/*methods :1. SQL query 2. prepared statements to avoid SQL injections (there are 2 types I used named params)
a; prepare
b; execute*/
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
    return "Record deleted";
}



 public function statTotal() {
     $sql = "SELECT * FROM
(SELECT SUM(amount) as amount FROM income
UNION
SELECT SUM(amount) as amount FROM outcome) as total";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $statisticTotal = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $statisticTotal;
 }
 public function statExpense() {
     $sql = "SELECT type, SUM(amount) as amount FROM outcome
GROUP BY type
ORDER BY SUM(amount) DESC;";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $statisticExpense = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $statisticExpense;
 }
}
?>