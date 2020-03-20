<?php 
include ('includes/header.php');
?>
<?php 
require_once('includes/dbconn/db.php');
$db= new DB();
$data= $db->lastActions();
$total= $db->getTotal();
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
    <?php foreach ($data as $item) {?>
    <tr  style="<?php 

    if($item['constant'] == 0 ) {
        echo "background: rgba(217, 127, 127, 0.7);";
    } else {
        echo "background: rgba(126, 156, 61, 0.7);";
    }
    ?>" class="record">
        <td> <?php echo $item['name'] ?></td>
        <td> <?php echo $item['type'] ?></td>
        <td> <?php echo $item['amount'] ?></td>
        <td> <?php echo $item['date'] ?></td>
    </tr>
    <?php } ?>
</tbody>
</table>

<h2>Your total Budget: <?php foreach($total as $money ){
    if($money < 0|| $money > 0) {
    echo $money;
    } else {echo 0;}
}  ?>  ft</h2>
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
        <option value="rent house">Rent House</option>
        <option value="car">Car</option>
        <option value="food">Food</option>
        <option value="entertainment">Entertainment</option>
        <option value="tax">Tax</option>
        <option value="electronics">Electronics</option>
        <option value="gift">Gift</option>
    </select>
    <label for="">Amount (Ft)</label>
    <input type="number" min="1" required name="amount">
    <label for="">Date</label>
    <input type="date" placeholder="dd/mm/yyyy" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)" required name="date">
    <button class="button button-outcome"  name="expenseMoney">Send</button>
</form>
</div>



</div>
<?php 
include ('includes/footer.php');
?>
