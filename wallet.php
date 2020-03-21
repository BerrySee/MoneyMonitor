<?php 
include ('includes/header.php');
require_once('includes/dbconn/db.php');
$db  = new DB();
$history = $db->getHistory();
?>
<div class="wallet-container">
<h1>Search in History</h1>

    <form method="POST" action="/includes/searchdata.php">
        <label class="label1" for="">From:</label>
        <input class="input1" type="date" name="from">
        <label class="label2" for="">To:</label>
        <input class="input2" type="date" name="to">
        <button type="submit" name="search">Search</button>
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

    if($item['constant'] == 0 ) {
        echo "background: rgba(217, 127, 127, 0.7);";
    } else {
        echo "background: rgba(126, 156, 61, 0.7);";
    }
    ?>">
        <td> <?php echo $item['name'] ?></td>
        <td> <?php echo $item['type'] ?></td>
        <td> <?php echo $item['amount'] ?></td>
        <td> <?php echo $item['date'] ?></td>
        <td> <form action='includes/delete.php' method="POST"> <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
        <input type="hidden" name="constant" value="<?php echo $item['constant'] ?>"><button style="background-color:rgba(192, 57, 43, 1); color: white; border: 0px;" type="submit" name="delete" value="Delete">Delete</button>  </form>  </td>
    </tr>
    <?php } ?>
    </tbody>
</table>



</div>


</div>
<?php 
include ('includes/footer.php');
?>