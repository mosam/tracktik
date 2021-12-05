<h1 class="text-center">Track Tik - PHP Demo Evalution</h1>
<?php 
$products = Products;
?>
<h5 class="text-center">Product Listing</h5>

<table class="table table-bordered">
<thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Add Cart</th>
        <th>Remove Cart</th>
      </tr>
    </thead>
    <tbody>
        
      <?php  foreach($products as $key=>$product){ 
          if(is_array($products[$key])){ ?>
          
      <?php  foreach($product as $key1 => $val1){ ?>
        <tr  data-type ="<?php echo $key ?>" data-name = "<?php echo $key1?>">  <td> 
            <?php echo $key1; ?>   
           </td>
           <td> 
            <?php echo $val1; ?>   
           </td> <td><button  type="button" class="btn btn-primary add-cart">+</button></td>
           <td><button type="button" class="btn btn-primary remove-cart">-</button></td>
         </tr>
        <?php }  ?> 
    <?php }else{  ?>
         <tr data-type ="<?php echo $key ?>" data-name = "<?php echo $key?>">
           <td> <?php echo $key; ?></td>
           <td> 
            <?php echo $product; ?>   
           </td>
           <td><button type="button" class="btn btn-primary add-cart">+</button></td> 
           <td><button type="button" class="btn btn-primary remove-cart">-</button></td>
         </tr>
      <?php } } ?>
    
    </tbody>
  </table>



 