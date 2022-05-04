<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-top">
                    <select class="awe-select">
                        <option>Best Match</option>
                        <option>Best Rate</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">


                <?php foreach ($sql as $good): 
                ?>

                        <!-- ITEM -->
                        <div class="flight-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="<?php echo $good['imgs'];?> " alt="">
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="index.php?page=detail&id=<?php echo $good['id'];?>"><?php  echo $good['to_country'];?> : <?php  echo $good['to_city'];?> </a>
                                    </h2>
                                </div>
                                <table class="item-table">
                                    <thead>
                                        <tr>
                                            <th class="route">Route</th>
                                            <th class="depart">Depart</th>
                                            <th class="arrive">Arrive</th>
                                            <th class="duration">Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="route">
                                                <ul>
                                                    <li>

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
                                                        <?php  echo $goodc['from_there'];?>

                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                    <li><?php  echo $good['to_city'];?> <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                </ul>
                                            </td>
                                            <td class="depart">
                                                <span><?php  echo $good['time_from'];?></span>
                                                <span class="date"><?php  echo $good['date_from'];?></span>
                                            </td>
                                            <td class="arrive">
                                                <span><?php  echo $good['time_to'];?></span>
                                                <span class="date"><?php  echo $good['date_to'];?></span>
                                            </td>
                                            <td class="duration">
                                                <span><?php  echo $good['time_travel'];?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    <span class="amount"><?php echo $good['price'].'₽';?></span>
                                    exclude Fare
                                </div>
                                <a href="index.php?page=detail&id=<?php echo $good['id'];?>" class="awe-btn">Book now</a>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                <?php endforeach; ?>
                    </div>


                    <!-- PAGINATION -->
<!--                             <div class="page__pagination">
                        <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                    </div> -->
                    <!-- END / PAGINATION -->
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="page-sidebar">
                    <div class="sidebar-title">
                        <h2>Flight</h2>
                        <div class="clear-filter">
                            <a href="#">Clear all</a>
                        </div>
                    </div>
                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox_text">
                        <h3>Flight Type</h3>
                        <div class="widget_content">
                            <label>
                                <input type="checkbox">
                                <i class="awe-icon awe-icon-check"></i>
                                Oneway
                            </label>
                            <label>
                                <input type="checkbox">
                                <i class="awe-icon awe-icon-check"></i>
                                Turn-around
                            </label>
                            <label class="from">
                                From
                                <span class="form-item db">
                                    <i class="awe-icon awe-icon-marker-1"></i>
                                    <input type="text">
                                </span>
                            </label>
                            <label class="to">
                                To
                                <span class="form-item db">
                                    <i class="awe-icon awe-icon-marker-1"></i>
                                    <input type="text">
                                </span>
                            </label>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_price_filter">
                        <h3>Price Level</h3>
                        <div class="price-slider-wrapper">
                            <div class="price-slider"></div>
                            <div class="price_slider_amount">
                                <div class="price_label">
                                    <span class="from"></span> - <span class="to"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Distance</h3>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Airport
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Shopping District
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Attractions
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Near Traffic station
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                        <h3>Service Include</h3>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Room service
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Laundry
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Meal at room
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Wifi &amp; internet
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Parking lot
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    TV and appliances
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Pool
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <i class="awe-icon awe-icon-check"></i>
                                    Gym and Spa
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                </div>
            </div>
        </div>
    </div>
</section>