        <section class="awe-parallax login-page-demo">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register-page__content">
                    <div class="content-title">
                        <span>Добро пожаловать</span>
                        <h2>ПАССАЖИР!</h2>
                    </div>
                    <form action="handler_form/signin.php" method="post">
                        <div class="form-item">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-item">
                            <label>Пароль</label>
                            <input type="password" name="password">
                        </div>
                        <a href="#" class="forgot-password">Забыли пароль?</a>
                        <div class="form-actions">
                            <input type="submit" value="Войти">
                        </div>
                        <?php

                            echo $_SESSION['message'];
                        
                    ?> 
                    </form>
                    <div class="login-register-link">
                        Ещё нет аккаунта? <a href="index.php?page=register">Зарегестрируйтесь ТУТ!</a>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <!-- END / PAGE WRAP -->
</body>
</html>