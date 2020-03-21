<?php 
include ('includes/header.php');
require_once('includes/dbconn/db.php');
$db  = new DB();
$data = $db->getHistory();
?>
<div class="wallet-container">
<h1>Search in History</h1>

    <form method="POST" action="includes/search.php">
        <label class="label1" for="">From:</label>
        <input id="fromDate" type="date" placeholder="dd/mm/yyyy" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)" required name="from">
        <label class="label2" for="">To:</label>
        <input id="toDate" type="date" placeholder="dd/mm/yyyy" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)" required name="to" >
        <button id="search" name="search"> </button>
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
    <tbody id="dataViewer">
        <!--PHP will be here foreach-->
        <?php
        foreach($data as $item) {
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