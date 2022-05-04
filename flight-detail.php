<?php   
require('connect.php');

        $_SESSION['sqlc'] = "SELECT * FROM `from_cat`";
        $sqlc_text = $_SESSION['sqlc'];
        $sqlc=$link->query($sqlc_text); 
        $idc = $good['from_there'];
        $goodc = [];
        foreach ($sqlc as $categ) {
            if($categ['id'] == $idc) {
                $goodc=$categ;
                break;
            }
        }
?>


        <!-- BREADCRUMB -->
        <section>
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="index.php?page=flight">Авиабилеты</a></li>
                        <li><a href="#"><?php  echo $good['to_country'];?></a></li>
                        <li><span><?php  echo $good['to_city'];?></span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- BREADCRUMB -->

        
        <section class="product-detail">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-detail__info">
                            <div class="product-title">
                                <h2><?php  echo $good['to_country'];?> : <?php  echo $good['to_city'];?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <div class="product-tabs tabs">
                            <ul>
                                <li>
                                    <a href="#tabs-1">Initiative</a>
                                </li>
                                <li>
                                    <a href="#tabs-2">Services on-flight</a>
                                </li>
                                <li>
                                    <a href="#tabs-3">Good to know</a>
                                </li>
                            </ul>
                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                    <div class="initiative">


                                        <!-- ITEM -->
                                        <div class="initiative__item">
                                            <div class="initiative-top">
                                                <div class="title">
                                                    <div class="from-to">
                                                        <span class="from"><?php  echo $goodc['from_there'];?></span>
                                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                                        <span class="to"><?php  echo $good['to_city'];?></span>
                                                    </div>
                                                    <div class="time"><?php echo $good['date_from'];?> | Total time: <?php echo $good['time_travel']?></div>
                                                </div>
                                                <div class="price">
                                                    <span class="amount"><?php echo $good['price'].' ₽';?></span>
                                                </div>
                                            </div>
                                            <table class="initiative-table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <div class="item-thumb">
                                                                <div class="image-thumb">
                                                                    <img src="images/flight/4.jpg" alt="">
                                                                </div>
                                                                <div class="text">
                                                                    <span><?php echo $good['airlines'];?></span>
                                                                    <p>QR-829</p>
                                                                    <span>Economy</span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="item-body">
                                                                <div class="item-from">
                                                                    <h3>HAN</h3>
                                                                    <span class="time">14:15</span>
                                                                    <span class="date">Thu, 12 Feb, 2015</span>
                                                                    <p class="desc">John F Kennedy, New York</p>
                                                                </div>
                                                                <div class="item-time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span>10h 25m</span>
                                                                </div>
                                                                <div class="item-to">
                                                                    <h3>DOH</h3>
                                                                    <span class="time">23:10</span>
                                                                    <span class="date">Thu, 12 Feb, 2015</span>
                                                                    <p class="desc">Doha, Doha</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            

                                                       <!--  <div class="booking-info">
                                                            <div class="form-submit">
                                                                <div class="add-to-cart">
                                                                    <button type="submit">
                                                                        <i class="awe-icon awe-icon-cart"></i>Add this to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                                    
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END / ITEM -->
        <form id="form1" name="form1" action="add_cart.php" method="post">

        <!-- начало невидимой части формы -->
            <input type="hidden"  name="tickets_id" value="<?php echo $good['id']?>" />
        
        <!-- конец невидимой части формы -->

            <input class='add_to_cart' type="submit" value="В корзину" name="submit">
        </form>
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
                                </div>
<!--                                 <div id="tabs-2">
                                    <div class="services-on-flight">
                                        <div class="item">
                                            <label>
                                                <input type="checkbox" name="serviceitem">
                                                <i class="awe-icon awe-icon-check"></i>
                                                <span>Entertainment</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <label>
                                                <input type="checkbox" name="serviceitem">
                                                <i class="awe-icon awe-icon-check"></i>
                                                <span>Communication</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <label>
                                                <input type="checkbox" name="serviceitem">
                                                <i class="awe-icon awe-icon-check"></i>
                                                <span>Inflight Magazine</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <label>
                                                <input type="checkbox" name="serviceitem">
                                                <i class="awe-icon awe-icon-check"></i>
                                                <span>Inflight Cuisine & Beverages</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <label>
                                                <input type="checkbox" name="serviceitem">
                                                <i class="awe-icon awe-icon-check"></i>
                                                <span>Your Health Inflight</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <label>
                                                <input type="checkbox" name="serviceitem">
                                                <i class="awe-icon awe-icon-check"></i>
                                                <span>Inflight Duty Free</span>
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
<!--                                 <div id="tabs-3">
                                    <table class="good-to-know-table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p>Check in</p>
                                                </th>
                                                <td>
                                                    <p>From 15:00 hours</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Check out</p>
                                                </th>
                                                <td>
                                                    <p>Until 11:00 hours</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Cancellation / prepayment</p>
                                                </th>
                                                <td>
                                                    <p>Cancellation and prepayment policies vary according to room type. Please check the room conditions when selecting your room above.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Children and extra beds</p>
                                                </th>
                                                <td>
                                                    <p>The maximum number of children’s cots/cribs in a room is 1.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Internet</p>
                                                </th>
                                                <td>
                                                    <p>free! WiFi is available in all areas and is free of charge.</p>
                                                    <p><span class="light">Free</span>children under 2 years stay free of charge when using existing beds.</p>
                                                    <p><span class="light">Free</span>children under 2 years stay free of charge when using existing beds.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Pets</p>
                                                </th>
                                                <td>
                                                    <p>Pets are allowed. Charges may be applicable.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Groups</p>
                                                </th>
                                                <td>
                                                    <p>When booking for more than 11 persons, different policies and additional supplements may apply.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Accepted cards for payment</p>
                                                </th>
                                                <td>
                                                    <p><img src="images/paypal2.png" alt=""></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="detail-sidebar">
                            <div class="call-to-book">
                                <i class="awe-icon awe-icon-phone"></i>
                                <em>Call to book</em>
                                <span>+1-888-8765-1234</span>
                            </div>
                            <div class="booking-info">
                                <h3>Booking info</h3>
                                <div class="form-group">
                                    <div class="form-elements form-adult">
                                        <label>Adult</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <span>12 yo and above</span>
                                    </div>
                                    <div class="form-elements form-kids">
                                        <label>Kids</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <span>11 and under</span>
                                    </div>
                                </div>
                                <div class="form-baggage-weight">
                                    <label>Extra baggage weight / person</label>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>15 kg - $20</option>
                                            <option>15 kg - $20</option>
                                        </select>
                                    </div>
                                    <div class="form-item">
                                        <select class="awe-select">
                                            <option>25 kg - $40</option>
                                            <option>25 kg - $40</option>
                                        </select>
                                    </div>
                                    <span>Cabin 7kg/person for free</span>
                                </div>
                                <div class="price">
                                    <em>Total for this booking</em>
                                    <span class="amount">$5,923</span>
                                </div>
                                <div class="form-submit">
                                    <div class="add-to-cart">
                                        <button type="submit">
                                            <i class="awe-icon awe-icon-cart"></i>Add this to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- END / PAGE WRAP -->    