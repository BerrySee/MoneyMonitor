

<?php 
include ('includes/header.php');

 ?>

<div class="wallet-container">
  <h1>Satistics</h1>
  <div class="chart-container">
  <div class="barChart">
    <h3>Amounts of certain costs</h3>
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
<script   src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
    
    <script src = "scripts/stat.js" ></script>
</body>
</html>
