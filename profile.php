<section class="product-detail">
    <div class="container">
        <div class="row">

                        <div class="col-md-6">
                <div class="product-detail__gallery">
                    <div class="product-slider-wrapper">
                            <div>
                                <img src="images/img/1.jpg" width="400" alt="">
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-detail__info">
                    <div class="product-title">

                        <h2><?= $_SESSION['user']['full_name'] ?></h2>
                    </div>
                    <div class="product-email">
                        <i class="fa fa-envelope"></i>
                        <a href="#"><?= $_SESSION['user']['email'] ?></a>
                    </div>

                    <div class="profile_info">
                        <div class="item">
                            <h6>Колличество перелетов</h6>
                            <p><i class="awe-icon awe-icon-attraction"></i>78</p>
                        </div>
                        <div class="item">
                            <h6>Время в пути</h6>
                            <p><i class="fa fa-clock-o"></i>4 days 3 nights</p>
                        </div>
                        <div class="item">
                            <h6>Посещено стран</h6>
                            <p>Long duration</p>
                        </div>
                    </div>

                    <table class="ticket-price">
                        <thead>
                            <tr>
                                <th class="ticket-price"><p>Билеты :</p></th>
                                <th class="adult"><span>Дата</span></th>
                                <th class="kid"><span>Время вылета</span></th>
                                <th class="kid2"><span>Статус</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ticket-price">
                                    <em>* Vouchers valid for 12 months after purchase.</em>
                                </td>
                                <td class="adult">
                                    <ins>
                                        <span class="amount">$109</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$119.00</span>
                                    </del>
                                </td>
                                <td class="kid">
                                    <ins>
                                        <span class="amount">$80</span>
                                    </ins>
                                    <del>
                                        <span class="amount">$119.00</span>
                                    </del>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
   </div>
</div>