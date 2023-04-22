<?php  if(count($data) == 0){ ?>
<div style="text-align: center;">
    <img width="50%" src="libary/images/9bdd8040b334d31946f49e36beaf32db.png" />
    <p>Bạn chưa có đơn hàng nào!</p>
</div>
<?php }else{ ?>

    <div class="dropcart__products-list">
    
    <?php foreach($data as $key => $value){ $allCart += $value['price'];?>
        <div class="dropcart__product">
            <div class="product-image dropcart__product-image">
                <a class="product-image__body"><img class="product-image__img" src="<?=$value['thumb']?>" alt="">
                </a>
            </div>
            <div class="dropcart__product-info">
                <div class="dropcart__product-name"><a><?=$value['nameProduct']?></a>
                </div>
                <div class="dropcart__product-meta">
                    <span class="dropcart__product-quantity"><?=$value['quantity']?></span> × <span class="dropcart__product-price"><?=number_format($value['price'])?>đ</span>
                </div> 
            </div>
            <button type="button" id="remove_product_cart" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon" data-id="<?=$key?>">
                <i class="fas fa-times"></i>
            </button>
        </div>
    <?php } ?>
    
</div>


<div class="dropcart__totals">
    <table>
        <tr>
            <th>Tổng tiền</th>
            <td><?=number_format($allCart)?>đ</td>
        </tr>
    </table>
</div>
<div class="dropcart__buttons"><a class="btn btn-secondary" href="my-cart">Xem giỏ hàng</a>
</div>

<?php } ?>
<script>

    $(document).ready(function(){
        $(document).on('click','#remove_product_cart',function(){
            remove_product_cart($(this).data('id'));
        });
    });

  	function remove_product_cart(id){
  	    
    	swal("Xoá thành công!", "", "success");
    	
        $.ajax({
            url: 'controller/?act=api-del-cart',
            type: 'GET',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data){

                $( "#count_product" ).text(data);

            }
        });
        
        setTimeout(function(){
            $('#listProduct_Cart').html("");
            $( "#listProduct_Cart" ).load("controller/?act=api-list-cart");

        }, 500);
    }
    
	
</script>
