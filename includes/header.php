
<!DOCTYPE html>
<?php
include ('includes/arrays.php');
?>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Money Monitor</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style.css?=v2"/>
     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  </head>
  <body>
    <header>
      <h1>Money Monitor</h1>
       <div class="theme-switch-wrapper">
       <label class="theme-switch" for="checkbox">
    <input type="checkbox" id="checkbox" />
    </div>
  </label>
      <nav>
       
       
<ul class="nav__links">
 <?php 
 foreach($navItems as $item) {
     echo "<li> <a href =\"$item[slug]\" >$item[title]</a></li>";
 }
 
 ?>
</ul>
         
      </nav>
      <div class="bars" id="bar-icon">
           <div class="bar1"></div>
           <div class="bar2"></div>
           <div class="bar3"></div>
         </div>
      
         
    </header>
    <section>