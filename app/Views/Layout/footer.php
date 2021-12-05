   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<script>
$(function() {
    $( ".add-cart" ).click(function() {
      var productsName = $(this).closest('tr').attr('data-name'); 
       var productType = $(this).closest('tr').attr('data-type'); 
        $.ajax({
            url:"app/AddProduct.php",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {productName: productsName, productType : productType},
            success:function(result){
                console.log(result.abc);
            }
        });
    });
    
    $( ".remove-cart" ).click(function() {
         var productsName = $(this).closest('tr').attr('data-name'); 
    });
});
</script>