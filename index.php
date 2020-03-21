<?php 
$page = 'index';
include ('includes/header.php');
?>
<div id=coins></div>
<div class="start-container">

  <div class="col">
    
      <div class="welcome">
        <h1>Welcome to my Money Monitor application.</h1>
      </div>

  </div>
  <div class="col">
    <img class="picture" src="pictures/wallet.png" alt=""/>
  </div>
</div>
<form action="actions.php">
<button type="submit" class="get-started">
Get started
</button>
</form>
<?php 
include ('includes/footer.php');
?>
