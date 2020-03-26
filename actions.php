<?php 
include('includes/header.php');
include('includes/arrays.php');
?>
<?php 
require_once('includes/dbconn/db.php');
$db = new DB();
$data= $db->getHistory();
$total= $db->getTotal();
?>
<div class="actions-container">
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
        <option value="Other" >Other</option>
    </select>
    <label for="">Amount (Ft)</label>
    <input type="number" min="1" name="amount" required>
    <label for="">Date</label>
    <input type="date" placeholder="dd/mm/yyyy" required name="date">

    <button class="button button-income" name="incomeMoney" type="submit">Send</button>
</form>

</div>
<div class="finance">
<h2> Your last finance actions:</h2>
<table>
<thead>
<tr>
<th>Person</th>
<th>Type</th>
<th>Amount (ft)</th>
<th>Date</th>
</tr>
</thead>
<tbody>
    <?php 
    
    foreach (array_slice($data, 0, 10) as $item) {?>
    <tr  <?php echo "style="; 

    if($item['constant'] == 0 ) {
        echo "\"background: rgba(217, 127, 127, 0.7);\"";
    } else {
        echo "\"background: rgba(126, 156, 61, 0.7);\"";
    }
    ?> >
        <td> <?php echo $item['name'] ?></td>
        <td> <?php echo $item['type'] ?></td>
        <td> <?php echo number_format($item['amount']) ?></td>
        <td> <?php echo $item['date'] ?></td>
    </tr>
    <?php } ?>
</tbody>
</table>

<h2>Your total Budget: <?php $money = implode("",$total);
if($money != 0)
     echo (number_format($money));
     else echo 0;
    
 ?>  ft</h2>
</div>
<div class="outcome">
    <h1>Expense</h1>
<form action="includes/expense.php" class="submission-form" method="post">
 <label for="">Person</label>
    <select name="name" required>
    <option  name="Berci">Berci</option>
    <option  name="Vivi">Vivi</option>
    </select>
    <label for="">Type</label>
    <select name="type" id="" required>
        <?php
        foreach($options as $item) {
     echo "<option value=\"$item[value]\" >$item[innerhtml]</option>";
        }
        ?>
       
    </select>
    <label for="">Amount (Ft)</label>
    <input type="number" min="1" required name="amount">
    <label for="">Date</label>
    <input type="date" placeholder="dd/mm/yyyy"  required name="date">
    <button class="button button-outcome"  name="expenseMoney" type="submit">Send</button>
</form>
</div>



</div>
<?php 
include ('includes/footer.php');
?>
</body>
</html>