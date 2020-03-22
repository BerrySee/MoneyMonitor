

<?php 
include ('includes/header.php');
require_once('includes/dbconn/db.php');
$db  = new DB();
$history = $db->getHistory(); ?>

<div class="wallet-container">
  <h1>Satistics</h1>
  <div class="chart-container">
  <div class="barChart">
    <h3>Total amounts</h3>
    <canvas id="barChart"></canvas>
  </div>
  <div class="pieChart">
    <h3>Ratio</h3>
    <canvas id = "pieChart"></canvas>
  </div>
  </div>
</div>


<?php 
include ('includes/footer.php');
?>
