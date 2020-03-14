<?php 
include ('includes/header.php');
require_once('includes/dbconn/db.php');
$db  = new DB();
$history = $db->getHistory();
?>
<div class="wallet-container">
<h1>Search in History</h1>

    <form class="">
        <label class="label1" for="">From:</label>
        <input class="input1" type="date">
        <label class="label2" for="">To:</label>
        <input class="input2" type="date">
    </form>
    <div class="history">
<table>
    <thead>
        <tr>
            <th>Person</th>
            <th>Type</th>
            <th>Amount (Ft)</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!--PHP will be here foreach-->
        <?php
        foreach($history as $item) {
        ?>
         <tr  style="<?php 

    if($item['type'] != 'Salary' && $item['type'] != 'Gift' ) {
        echo "background: #D97F7F;";
    } else {
        echo "background: #7E9C3D;";
    }
    ?>">
        <td> <?php echo $item['name'] ?></td>
        <td> <?php echo $item['type'] ?></td>
        <td> <?php echo $item['amount'] ?></td>
        <td> <?php echo $item['date'] ?></td>
        <td><button></button></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>



</div>
<?php 
include ('includes/footer.php');
?>