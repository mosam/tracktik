
<?php
include_once('app/Config/Constants.php');
include_once('app/Views/Layout/header.php');
include_once('app/Controllers/Television.php'); 
include_once('app/Controllers/Console.php'); 
include_once('app/Controllers/ElectronicItems.php');
include_once('app/Controllers/Microwave.php');
include_once('app/Controllers/Controler.php');

  $cart = []; 

  $wiredController = new Controler(0,'controller',true);
  $remoteController = new Controler(0,'controller',false);
  
  $television1 = new Television(16000,'television',false,['extras'=>[['product'=>$remoteController,'limit'=>2]]]);
  $television2 = new Television(23000,'television',false,['extras'=>[['product'=>$remoteController,'limit'=>1]]]);
  $console = new Console(1200,'console',false,['extras'=>[['product'=>$remoteController,'limit'=>2],['product'=>$wiredController,'limit'=>2]]]);
  $microwave = new Microwave(13000,'microwave',false);

  array_push($cart,$television1->product);
  array_push($cart,$television2->product);
  array_push($cart,$console->product);
  array_push($cart,$microwave->product);

$eleItems = new  ElectronicItems($cart);

$sortedItems =  $eleItems->getSortedItems(); 
$totalPrice = $eleItems->getPriceTotal();
 $typeWiseproduct = $eleItems->getItemsByType('console'); 
include_once('app/Views/home.php');
include_once('app/Views/Layout/footer.php');
?>
