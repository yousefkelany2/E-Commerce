<script>
$(".btncard").click(function(){
    var product_id=$(this).attr("product_id");
    $.post("functions/product/product.php",
    {product_id : product_id},
    function(data){
        $(".addcard").html(data);
        del();
        dataCart();
        total();  
        
    })
    

})

</script>



<script>

    function del(){
        $("._delete").click(function(){
            var product_id=$(this).attr("idpro");
            console.log(product_id);
            $(this).closest("li").remove();
        
            $.post("functions/card/delete.php",
            {product_id : product_id},
            function(){
                dataCart();
                total();
            }) 
            
        
        })

    }

    del();




    function dataCart(){
        var num_cart=$('.des').length;
        $('._cart_count').html(num_cart);
        
       
    }

    dataCart()


    function total(){
      
      var count=  document.querySelectorAll("._count");
      var price=  document.querySelectorAll("._price");
      var total =0;
      for(var i=0 ; i<price.length; i++){
            var total= total+ +price[i].innerHTML*count[i].innerHTML;        
      }
      console.log(total);
      document.querySelector(".sum_total").innerHTML="$"+total;
    }
    total();

    $(".key").keyup(function() {
	var name=$(".key").val();
    console.log(name);
    $.post("functions/search/search.php",
	{name:name},
    function(data){
        $("._print").html(data);
    }
    )
});
    
</script>