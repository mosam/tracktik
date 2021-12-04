<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
<?php 

include_once 'Controllers/ElectronicItems.php';
include_once 'Controllers/Television.php';
include_once 'Controllers/Controler.php';
include_once 'Controllers/Console.php';
include_once 'Config/Constants.php';

 $television = new Television();
 $television->setPrice(800);
 $max = $television->maxExtras();
 $price = $television->getPrice();

?>
<script>
    
$(function() {
    console.log( "ready!" );
});
</script>