<?php   
require('connect.php');
            //вывод самолетов
        $_SESSION['sqlc'] = "SELECT * FROM `plane`";
        $sqlc_text = $_SESSION['sqlc'];
        $sqlc=$link->query($sqlc_text); 
        $idc = $good['id_plane'];
        $goodc = [];
        foreach ($sqlc as $categ) {
            if($categ['id_plane'] == $idc) {
                $goodc=$categ;
                break;
            }
        }

    $_SESSION['sql_d'] = "SELECT * FROM `flight_t` WHERE `from_city` = '$good[from_city]' AND `to_city` = '$good[to_city]'";
    $sql_text_d = $_SESSION['sql_d'];
    $sql_d=$link->query($sql_text_d); 
?>

        <!-- переходы под шапкой -->
        <section>
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="index.php?page=flight">Авиабилеты</a></li>
                        <li><a href="index.php?page=search&detail_country=<?php echo $good['to_country'];?>">
                            <?php  echo $good['to_country'];?></a></li>
                        <li><span><?php  echo $good['to_city'];?></span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- конец / переходы под шапкой -->

        <!-- шапка карточки -->
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
                                    <a href="#tabs-1">    Билет    </a>
                                </li>

                                <li>
                                    <a href="#tabs-2">Необходимо знать</a>
                                </li>
                            </ul>

                            <!-- конец / шапка карточки -->

                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                    <div class="initiative">

                                        <!-- Карточка билета -->
                                        <div class="initiative__item">
                                            <div class="initiative-top">
                                                <div class="title">
                                                    <div class="from-to">
                                                        <span class="from"><?php  echo $good['from_city'];?></span>
                                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                                        <span class="to"><?php  echo $good['to_city'];?></span>
                                                    </div>
                                                    <div class="time"><?php echo date_format(date_create($good['date_from']), 'd-m-Y');?> | 
                                                        Время перелета: 
                                                        <?php echo date_format(date_create($good['time_travel']), 'H:i');?>        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    <?php foreach ($sql_d as $good): ?>

                                            <table class="initiative-table">

                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <div class="item-thumb">
                                                                <div class="image-thumb">
                                                                    <img src="images/flight/4.jpg" alt="">
                                                                </div>
                                                                <div class="text">
                                                                    <p><?php echo $goodc['model'];?></p>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="amount"><?php echo $good['price'].' ₽';?></span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="item-body">
                                                                <div class="item-from">
                                                                    <h3><?php echo $good['kod_from'];?></h3>
                                                                    <span class="time">
                                                                        <?php echo date_format(date_create($good['time_from']), 'H:i');?>
                                                                    </span>
                                                                    <span class="date">
                                                                        <?php echo date_format(date_create($good['date_from']), 'd-m-Y');?>
                                                                    </span>
                                                                    <p class="desc"><?php echo $goodc['airport'];?></p>
                                                                </div>
                                                                <div class="item-time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span>
                                                                        <?php echo date_format(date_create($good['time_travel']), 'H:i');?>
                                                                    </span>
                                                                </div>
                                                                <div class="item-to">
                                                                    <h3><?php echo $good['kod_to'];?></h3>
                                                                    <span class="time">
                                                                        <?php echo date_format(date_create($good['time_to']), 'H:i');?>
                                                                    </span>
                                                                    <span class="date">
                                                                        <?php echo date_format(date_create($good['date_to']), 'd-m-Y');?>
                                                                    </span>
                                                                    <p class="desc"><?php echo $good['airport_to'];?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    
                                                        <td>
                                                                <form id="form1" name="form1" action="add_cart.php" method="post">

                                                                    <!-- начало невидимой части формы -->
                                                                        <input type="hidden"  name="tickets_id" value="<?php echo $good['id_flight_t']?>" />
                                                                    
                                                                    <!-- конец невидимой части формы -->
                                                                        
                                                                        <button type="submit" name="submit" class="awe-btn buy">Бронировать</button> 

                                                                    </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <?php endforeach ?>

                                        </div>
                                        <!-- конец / карточка билета -->
                                    </div>
                                </div>
                                <!-- раздел справка -->
                                <div id="tabs-2">
                                    <table class="good-to-know-table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p>Отмена / предоплата</p>
                                                </th>
                                                <td>
                                                    <p>За бронирование и его отмену в установленный срок дополнительная плата не взымается. </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Дополнительная норма багажа</p>
                                                </th>
                                                <td>
                                                    <p>Стоимость доплаты за дополнительный багаж устанавливается в соответствии со временем обращения.</p>
                                                    <p>Стоимость дополнительного места багажа рассчитывается по специальной формуле исходя из тарифов за превышение нормативов, принятых для определенных направлений. </p>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Все параметры багажа подразделяют на три категории</p>
                                                </th>
                                                    <td>
                                                        <p>Число мест. Каждый провозимый чемодан либо сумка считается одним местом. Если их количество больше одного, назначается доплата.</p>
                                                        <p>Вес. Для багажа в случае перевеса чемодана придется заплатить по установленному тарифу. Это касается также превышения веса сумки, входящей в норму количества мест для бесплатного провоза.</p>
                                                        <p>Габариты. Регистрируемые багажные предметы при суммировании их длины, высоты и ширины должны укладываться в 203 см. В салон можно взять сумку, не превышающую размеров 55х40х20 см.</p>
                                                    </td>
                                            </tr>   
                                            <tr>
                                                <th>
                                                    <p>Интернет</p>
                                                </th>
                                                <td>
                                                    <p>Бесплатно! На борту самолета Wi-Fi предоставляется бесплатно.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Животные</p>
                                                </th>
                                                <td>
                                                    <p>Домашние животные разрешены. Может взиматься дополнительная плата.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Группы</p>
                                                </th>
                                                <td>
                                                    <p>При бронировании для более чем 11 посадочных мест могут применяться другие правила и взиматься дополнительная плата. Уточнить информацию можно написав на нашу почту.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p>Оплата принимается следующими картами</p>
                                                </th>
                                                <td>
                                                    <p><img src="images/paypal2.png" alt=""></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        <!-- конец / раздел справка -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="detail-sidebar">
                            <div class="call-to-book">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
