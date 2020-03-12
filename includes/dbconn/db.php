<?php
class DB {
private $dbHost = "localhost";
private $dbUser = "root";
private $dbPassword = "gizike94";
private $dbName ="finance";
private $conn;

public function __construct() {
    try {
        $dsn ="mysql:host=".$this->dbHost. ";dbname=".$this->dbName;
        $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
    } catch(PDOExepstion $e){
        die("DB connection failed: ".$e->getMessage());
    } 
}
public function incomeMoney($name, $type, $amount, $date) {
    $sql = "INSERT INTO income (name, type, amount, date) VALUES (:name, :type, :amount, :date)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name'=>$name, 'type'=>$type, 'amount'=>$amount, 'date'=>$date]);
    echo "data inserted";
}
public function lastActions() {
    $sql = "SELECT * FROM income GROUP BY date DESC LIMIT 10";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
/*public function total() {
majd az összebevétel kiadás összege lesz itt
}*/
}
?>