<section class="product-detail">
    <div class="container">
        <div class="row">
        <form action="edit_profile.php" method="post" enctype="multipart/form-data">
            <div class="col-md-6 col_profile">
                <div class="profile-img">
                    <img id="profile-img" src="images/img/tokyo.jpg" alt="">
                </div>
                <div class="col-md-6">
                 <div class="product-detail__info">
                     <div class="product-title">
                        <h2><input type="text" style="background-color: #f7f7f7; border: none; font-size: 25px;" name="full_name" value="<?php echo $_SESSION['user']['full_name'] ?>"></h2>
                    </div>
                    <div class="row">
                    <div class="product-email">
                        <i class="fa fa-envelope"></i>
                        <input type="text" style="background-color: #f7f7f7; border: none;" id="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                    </div>
                    </div>
                </div>
                    
                        <a class="exit" href="handler_form/logout.php">Выход</a>
                    
                </div>  
            </div>
            <div class="col-md-6">
                <div class="product-detail__info">
                    <div class="profile_info">
                                <div class="item">
                                    <h6>Номер телефона</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="number" value="<?php echo $_SESSION['user']['Phone'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Дата рождения</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="birthday" value="<?php echo date_format(date_create($_SESSION['user']['Birthday']), 'd-m-Y'); ?>">
                                </div>
                                <div class="item">
                                    <h6>Гражданство</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="citizenship" value="<?php echo $_SESSION['user']['Citizenship_pass'] ?>">
                                </div>
                                <div class="item">
                                    <h6>Страна выдачи</h6>
                                    <input type="text" style="background-color: #f7f7f7; border: none;" name="country" value="<?php echo $_SESSION['user']['Country_pass'] ?>">
                                </div>
                            </div>
            <button type="submit">редактировать</button>
        </form>


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