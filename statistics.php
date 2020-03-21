<?php 
include ('includes/header.php');
require_once('includes/dbconn/db.php');
$db  = new DB();
$history = $db->getHistory();
?>
<div class="wallet-container">
<table>


</table>

</div>
<?php 
include ('includes/footer.php');
?>