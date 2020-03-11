<?php 
include ('includes/header.php');
?>
<div class="universal-container">
<div class="income">
    <h1>Income</h1>
<form action="" class="submission-form">
    <label for="">Type</label>
    <select name="income" id="">
        <option value="salary">Salary</option>
        <option value="gift">Gift</option>
    </select>
    <label for="">Amount (Ft)</label>
    <input type="number" min="1">
    <label for="">Date</label>
    <input type="date">
    <button class="button button-income">Send</button>
</form>

</div>
<div class="finance">
<h2> Your last finance actions:</h2>
<div class="last-finance" > 
<div class="type">
    <p> <b> Type </b></p>
</div>
<div class="amount">
   <p> <b> Amount(Ft) </b></p>
</div>
<div class="type">
    <p><b> Date </b></p>
</div>
</div>
</div>
<div class="outcome">
    <h1>Outcome</h1>
<form action="" class="submission-form">
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
    <input type="date">
    <button class="button button-outcome">Send</button>
</form>
</div>



</div>
<?php 
include ('includes/footer.php');
?>
