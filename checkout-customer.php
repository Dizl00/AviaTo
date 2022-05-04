
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
                        <li><a href="index.php?page=yourcart">Ваша корзина</a></li>
                        <li class="current"><a href="index.php?page=checkcustomer">Информация о покупателе</a></li>
                        <li><a href="index.php?page=checkcomplete">Заверщение заказа</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="checkout-page__content">
                    <div class="customer-content">
                        <div class="woocommerce-info">
                            Returning customer? 
                            <a href="#" class="showlogin">Click here to login</a>
                        </div>

                        <div class="woocommerce-info">
                            Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                        </div>

                        <div class="coupon">
                            <form class="checkout_coupon">
                                <div class="form-row form-row-first">
                                    <input type="text" value="Coupon code">
                                </div>
                                <div class="form-row form-row-last">
                                    <input type="submit" class="button" value="Apply Coupon">
                                </div>
                            </form>
                        </div>

                        <div class="woocommerce-billing-fields">
                            <h3>Billing info</h3>
                            <div class="form-row" id="billing_first_name_field">
                                <label>First name</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_last_name_field">
                                <label>Last name</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_email">
                                <label>Email</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_company_field">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_country_field">
                                <label>Country</label>
                                <div class="country_select">
                                    <a href="#">
                                        <span>United Kingdom (UK)</span>
                                    </a>
                                </div>
                            </div>
                            <div class="form-row" id="billing_city_field">
                                <label>Town / city</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_state_field">
                                <label>State / county</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_address_1_field">
                                <label>Address</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_postcode_field">
                                <label>Postcode / zip</label>
                                <input type="text">
                            </div>
                            <div class="form-row" id="billing_phone_field">
                                <label>Phone</label>
                                <input type="text">
                            </div>
                            <div class="form-row form-row-wide create-account">
                                <input id="createaccount" type="checkbox"> <label for="createaccount">Create an account?</label>
                            </div>
                        </div>

                        <div class="woocommerce-shipping-fields">
                            <h3 id="ship-to-different-address">
                                <label for="ship-to-different-address-checkbox">Ship to a different address?</label>
                                <input id="ship-to-different-address-checkbox" type="checkbox" checked="checked">
                            </h3>
                            <div class="shipping_address">
                                <div class="form-row" id="shipping_first_name_field">
                                    <label>First name</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="shipping_last_name_field">
                                    <label>Last name</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="order_comments_field">
                                    <label>Order Notes</label>
                                    <textarea></textarea>
                                </div>
                                <div class="form-row" id="shipping_company_field">
                                    <label>Company Name</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="shipping_country_field">
                                    <label>Country</label>
                                    <div class="country_select">
                                        <a href="#">
                                            <span>United Kingdom (UK)</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-row" id="shipping_city_field">
                                    <label>Town / city</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="shipping_state_field">
                                    <label>State / county</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="shipping_address_1_field">
                                    <label>Address</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="shipping_postcode_field">
                                    <label>Postcode / zip</label>
                                    <input type="text">
                                </div>
                                <div class="form-row" id="shipping_phone_field">
                                    <label>Phone</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>

                        <div id="payment">
                            <h3>Payment method</h3>
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" name="payment_method">
                                    <label for="payment_method_bacs">Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>
                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" name="payment_method">
                                    <label for="payment_method_cheque">Cheque Payment </label>
                                    <div class="payment_box payment_method_cheque"><p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </li>
                                <li class="payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" name="payment_method">
                                    <label for="payment_method_paypal">
                                        PayPal 
                                        <img src="images/paypal.png" alt="">
                                        <a href="#" class="about_paypal">What is PayPal?</a>
                                    </label>
                                    <div class="payment_box payment_method_paypal"><p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-row place-order">
                                <input type="submit" class="button alt" id="place_order" value="Place order">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

