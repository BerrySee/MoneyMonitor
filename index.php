<?php 
$page = 'index';
include ('includes/header.php');
?>
<div id=coins></div>
<div style="margin-top: 2em;" class="start-container">

  <div class="col">
    <div class="row">
      <div class="welcome">
        <h1>Welcome to my Money Monitor application.</h1>
      </div>
      <div class="description">
        <p>You can upload your budget, your incomes and outcomes.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <img class="picture" src="pictures/wallet.png" alt=""/>
  </div>
</div>
<form action="actions.php">
<button type="submit" class="get-started" >
Get started
</button>
</form>
<?php 
include ('includes/footer.php');
?>
