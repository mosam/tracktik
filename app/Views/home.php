<h1 class="text-center">Track Tik - PHP Demo Evalution</h1>
<div class="container ">

    <h4>Answer 1. </h4>
<table class="table table-bordered  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>

  <?php if(isset($sortedItems) && !empty($sortedItems)){
  
  foreach($sortedItems as $key=>$item){ 
  ?>
    <tr>
      <th scope="row"><?php echo $key+1; ?></th>
     
      <td><?php echo $item['type']; ?>  <?php if(isset($item['extras'])){
      $extras = $item['extras']['extras'];  ?>
           <ul>  
           <?php  if(!empty($extras) && is_array($extras)) {  
                     foreach($extras as $key=>$extra){   ?>
                <li>   
                    <?php echo $extra['limit'];  echo ($extra['product']->product['wired'] == 1)?' Wired':' Remote';    ?>  controller 
                </li>
           <?php } 
           } ?>
           </ul>
      <?php } ?></td>
      <td><?php echo number_format($item['price'],2);
      if(isset($item['extras'])){ ?> </br> <?php echo number_format(0000,2); }?></td>
    </tr>
    <?php } }?>
    <tr>
                    <td colspan="2" align=right><strong>Total:</strong></td>
                    <td align=left><b><?php echo number_format($totalPrice,2); ?></b></td>
                    
                </tr>
  </tbody>
</table>
    <h4>Answer 2. </h4>
    <p>Console and its controllers cost : </p><b><?php  echo array_sum(array_column($typeWiseproduct,'price')); ?></b>
</div>