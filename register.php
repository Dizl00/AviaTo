        <section class="awe-parallax register-page-demo">
            <div class="container">
            <div class="content-title">
                        <span>Не оставайся дома</span>
                        <h2>ПРИСОЕДИНЯЙСЯ К НАМ !</h2>
                    </div>
            <div class="login-register-page__content registerleft">
                    <form action="handler_form/signin.php" method="post">
                    <h3 style="margin: 0px 0px 8px 0px;"> АВТОРИЗАЦИЯ  <i class="fa fa-user" aria-hidden="true"></i></i></h3>
                        <div class="form-item">
                            <label>Email</label>
                            <input type="email">
                        </div>
                        <div class="form-item">
                            <label>Пароль</label>
                            <input type="password">
                        </div>
                        <a href="#" class="forgot-password">Забыли пароль?</a>
                        <div class="form-actions">
                            <input type="submit" value="Войти">
                        </div>
                    </form>
                    <div class="login-register-link">
                        Присоединиться с помощью Google+</a>
                    </div>
                </div>
                <div class="login-register-page__content">
                    <form action="handler_form/signup.php" method="post" enctype="multipart/form-data">
                    <h3 style="margin: 0px 0px 8px 0px;"> РЕГИСТРАЦИЯ  <i class="fa fa-sign-in" aria-hidden="true"></i></h3>
                    <div class="form-item">
                        <label>ФИО</label>
                        <input type="text" name="full_name">
                        
                        <label>Email</label>
                        <input type="email" name="email">
                        
                        <label>Пароль</label>
                        <input type="password" name="password">
                        
                        <label>Подтверждение пароля</label>
                        <input type="password" name="password_confirm">

                        <div class="form-actions">
                            <input type="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- END / PAGE WRAP -->

</body>
</html>