<?php
/*
Template Name: Login page
*/
get_header();
?>

<!-- Форма входа -->
<form id="login_form" method="post">
    <p>
        <label for="user_login">Имя пользователя<br />
            <input type="text" name="log" value="" id="user_login" class="input" /></label>
    </p>
    <p>
        <label for="user_pass">Пароль<br />
            <input type="password" name="pwd" value="" id="user_pass" class="input" /></label>
    </p>
    <?php do_action('login_form'); ?>
    <p><input type="submit" value="Войти" class="button" /></p>
</form>
<div id="login_result"></div>

<!-- Форма регистрации -->
<form id="registration_form" method="post">
    <p>
        <label for="user_login">Имя пользователя<br />
            <input type="text" name="user_login" value="" id="user_login_reg" class="input" /></label>
    </p>
    <p>
        <label for="user_email">Email<br />
            <input type="email" name="user_email" value="" id="user_email_reg" class="input" /></label>
    </p>
    <p>
        <label for="user_pass">Пароль<br />
            <input type="password" name="user_pass" value="" id="user_pass_reg" class="input" /></label>
    </p>
    <?php do_action('register_form'); ?>
    <p><input type="submit" value="Зарегистрироваться" class="button" /></p>
</form>
<div id="registration_result"></div>

<script src="<?= _ikea_assets_path('js/ajax-login.js') ?>"></script>

<?php
get_footer();
?>