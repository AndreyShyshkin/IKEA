<?php
/*
Template Name: Login page
*/
get_header();
?>
<div class="login-page">
    <!-- Форма входа -->
    <div class="login-blog">
        <form id="login_form" method="post">
            <h2>SING IN</h2>
            <p>
                <label for="user_login">
                    <p class="text-login">Имя пользователя</p><br />
                    <input type="text" name="log" value="" id="user_login" class="input" />
                </label>
            </p>
            <p>
                <label for="user_pass">
                    <p class="text-login">Пароль</p><br />
                    <input type="password" name="pwd" value="" id="user_pass" class="input" />
                </label>
            </p>
            <?php do_action('login_form'); ?>
            <p><input type="submit" value="Войти" class="button submit-btn" /></p>
            <p class="btn-to-login" onclick="btn_to_singUp()">Нет аккаута, нажмите что бы Зарегистрироваться</p>
        </form>
        <div id="login_result"></div>
    </div>

    <!-- Форма регистрации -->
    <div class="login-blog">
        <form id="registration_form" method="post">
            <h2>SING UP</h2>
            <p>
                <label for="user_login">
                    <p class="text-login">Имя пользователя</p><br />
                    <input type="text" name="user_login" value="" id="user_login_reg" class="input" />
                </label>
            </p>
            <p>
                <label for="user_email">
                    <p class="text-login">Email</p><br />
                    <input type="email" name="user_email" value="" id="user_email_reg" class="input" />
                </label>
            </p>
            <p>
                <label for="user_pass">
                    <p class="text-login">Пароль</p><br />
                    <input type="password" name="user_pass" value="" id="user_pass_reg" class="input" />
                </label>
            </p>
            <?php do_action('register_form'); ?>
            <p><input type="submit" value="Зарегистрироваться" class="button submit-btn" /></p>
            <p class="btn-to-login" onclick="btn_to_singIn()">Есть аккаута, нажмите что бы Войти</p>
        </form>
        <div id="registration_result"></div>
    </div>

</div>
<script src="<?= _ikea_assets_path('js/ajax-login.js') ?>"></script>
<script src="<?= _ikea_assets_path('js/login.js') ?>"></script>
</script>

<?php
get_footer();
?>