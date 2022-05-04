<?php

    //подключаемся к БД и выбираем все данные о наших товарах
    
    $sql_m= $link->query("SELECT * FROM `tickets`");
    $Sum = 0;
    $add_product =  $_SESSION['add_tickets'];
    var_dump($add_product);
    //проверяем, что корзина не пуста иначе будет выходить ошибка
    if(isset($add_product)){
    //пербераем массив с добавленными товарами и выбираем id товара
   foreach($add_product as $key => $value){
        $a = $key;  //id товара
        $kol =  $_SESSION['add_tickets'][$a];
        $good_m = [];
        foreach ($sql_m as $product_m) {
            if($product_m['id'] == $a){
            $good_m= $product_m;
            break;  
            }   
        }
        
    ?> 
    <?php   

    $_SESSION['sqlc'] = "SELECT * FROM `from_cat`";
    $sqlc_text = $_SESSION['sqlc'];
    $sqlc=$link->query($sqlc_text); 
    $idc = $good_m['from_there'];
    $goodc = [];
    foreach ($sqlc as $categ) {
        if($categ['id'] == $idc) {
            $goodc=$categ;
            break;
        }
    }
?>
<?php
    $Sum +=$kol*$good_m['price'];
        }   
    }        

?>
<section class="checkout-section-demo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-page__top">
                    <div class="title">
                        <h1 class="text-uppercase">КОРЗИНА</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="checkout-page__sidebar">
                    <ul>
                        <li class="current"><a href="index.php?page=yourcart">Ваша корзина</a></li>
                        <li><a href="index.php?page=checkcustomer">Информация о покупателе</a></li>
                        <li><a href="index.php?page=checkcomplete">Заверщение заказа</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="checkout-page__content">
                    <div class="yourcart-content">
                        <div class="content-title">
                            <h2><i class="awe-icon awe-icon-cart"></i>Проверьте свой заказ</h2>
                        </div>
                        <div class="cart-content">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-name">Авиабилеты</th>
                                        <th class="product-price">Стоимость</th>
                                        <th class="product-quantity">Кол-во</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="product-remove">
                                            <a href="#"><i class="awe-icon awe-icon-close-o"></i></a>
                                        </td>
                                        <td class="product-name">

                                            <span><?php  echo $goodc['from_there'];?></span>
                                            <div></div>
                                            <span><?php  echo $good_m['to_city'];?></span>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount"><?php echo $good_m['price'].' ₽'; ?></span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                
                                                <button type="button" class="minus" value="+" id="button_plus">
                                                    <i class="fa fa-caret-up"></i>
                                                </button>
                                                 <input type="number" class="qty" step="1" min="1" max="10" id="num_count" name="quantity" value="1" title="Кол-во билетов" >

                                                <button type="button" class="plus" value="-" id="button_minus">
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
<!-- обработчик событий для счетчика количества товаров -->
<script>
    var numCount = document.getElementById('num_count');
    var plusBtn = document.getElementById('button_plus');
    var minusBtn = document.getElementById('button_minus');
    plusBtn.onclick = function() {
        var qty = parseInt(numCount.value);
        qty = qty + 1;
        numCount.value = qty;
    }
    minusBtn.onclick = function() {
        var qty = parseInt(numCount.value);
        if(qty>1){
            qty = qty - 1;
        }
        numCount.value = qty;
    }
</script>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo $kol*$good_m['price'].' ₽'; ?></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>



                            <div class="cart-footer">
                                <div class="cart-subtotal">
                                    <div class="subtotal-title">
                                        <h5>Cart Subtotal</h5>
                                    </div>
                                    <div class="subtotal">
                                        <span class="amount">$ 467.909</span>
                                        <span class="sale">- 30%</span>
                                    </div>
                                    <div class="coupon-code">
                                        <label for="coupon">Coupon Code</label>
                                        <div class="form-item">
                                            <input type="text" id="coupon">
                                        </div>
                                        <div class="form-submit">
                                            <input type="submit" value="Apply code" class="button">
                                        </div>
                                    </div>
                                </div>
                                <div class="shipping-handling">
                                    <h5 class="title">Shipping and Handling</h5>
                                    <span class="amount">$90</span>
                                    <div class="check-shipping-rate">
                                        <h4>Check Shipping rate</h4>
                                        <div class="form-row form-country">
                                            <select class="awe-select">
                                                <option>Country</option>
                                            </select>
                                        </div>
                                        <div class="form-row form-state">
                                            <input type="text" value="State / county">
                                        </div>
                                        <div class="form-row form-postal">
                                            <input type="text" value="Postal/zip code">
                                        </div>
                                        <div class="form-submit">
                                            <input type="submit" value="Check it" class="button">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-total">
                                    <h4 class="title">Order total</h4>
                                    <span class="amount">$ 467.909</span>
                                </div>
                                <div class="cart-submit">
                                    <input type="submit" value="Update Cart" class="update-cart">
                                    <input type="submit" value="Continue Checkout" class="checkout">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>