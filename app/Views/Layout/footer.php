   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<script>
$(function() {
    $(".btnAddAction").click(function(){
       cartAction('add',$(this).attr('data-id'));
   }); 
  
   $(".btnRemoveAction").click(function(){
       cartAction('remove',$(this).attr('data-id'));
   }); 
  
    function cartAction(action, productId) { 
    var queryString = "";
    if (action != "") {
        switch (action) {
        case "add":
            queryString = 'action=' + action + '&id=' + productId
                    + '&quantity=' + $("#qty_" + productId).val();
            break;
        case "remove":
            queryString = 'action=' + action + '&id=' + productId;
            break;
        case "empty":
            queryString = 'action=' + action;
            break;
        }
    }
    jQuery.ajax({
        url : "app/ajaxCall.php",
        data : queryString,
        type : "POST",
        success : function(data) {
          //  location.reload();
        },
        error : function() {
        }
    });
}
    
    
    
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