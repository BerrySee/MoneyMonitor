<?php 
include ('includes/header.php');
?>
<?php 
require_once('includes/dbconn/db.php');
$db= new DB();
?>
<div class="universal-container">
<div class="income">
    <h1>Income</h1>
<form action="includes/income.php" class="submission-form" method="POST">
    <label for="">Person</label>
    <select name="name" required>
    <option value="Berci" >Berci</option>
    <option value="Vivi" >Vivi</option>
    </select>
    <label for="">Type</label>
    <select name="type" required>
        <option value="Salary" >Salary</option>
        <option value="Gift" >Gift</option>
    </select>
    <label for="">Amount (Ft)</label>
    <input type="number" min="1" name="amount" required>
    <label for="">Date</label>
    <input type="date" placeholder="dd/mm/yyyy" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)" required name="date">

    <button class="button button-income" name="incomeMoney">Send</button>
</form>

</div>
<div class="finance">
<h2> Your last finance actions:</h2>
<div class="last-finance" > 
<div class="person">
<p> <b>Person</b> </p>
<?php
$data = $db->lastActions();
foreach($data as $i) {
    echo "<p>".$i['name']."</p>";
}
?>
</div>
<div class="type">
    <p> <b> Type </b></p>
    <?php
$data = $db->lastActions();
foreach($data as $i) {
    echo "<p>".$i['type']."</p>";
}
?>
</div>
<div class="amount">
   <p> <b> Amount(Ft) </b></p>
   <?php
$data = $db->lastActions();
foreach($data as $i) {
    echo "<p>".$i['amount']."</p>";
}
?>
</div>
<div class="date">
    <p><b> Date </b></p>
    <?php
$data = $db->lastActions();
foreach($data as $i) {
    echo "<p>".$i['date']."</p>";
}
?>
</div>
</div>
</div>
<div class="outcome">
    <h1>Outcome</h1>
<form action="" class="submission-form">
 <label for="">Person</label>
    <select name="person">
    <option value="berci" name="berci">Berci</option>
    <option value="vivi" name="vivi">Vivi</option>
    </select>
    <label for="">Type</label>
    <select name="income" id="">
        <option value="salary">Rent House</option>
        <option value="salary">Car</option>
        <option value="salary">Food</option>
        <option value="salary">Entertainment</option>
        <option value="salary">Tax</option>
        <option value="salary">Electronics</option>
        <option value="gift">Gift</option>
    </select>
    <label for="">Amount (Ft)</label>
    <input type="number" min="1">
    <label for="">Date</label>
    <input type="date" placeholder="dd/mm/yyyy" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)" required>
    <button class="button button-outcome">Send</button>
</form>
</div>



</div>
<?php 
include ('includes/footer.php');
?>
