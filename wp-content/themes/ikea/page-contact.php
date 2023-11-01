<?php
/*
Template Name: Contact page
*/
get_header();
?>

<?php
if (is_active_sidebar('ikea-contact-us')) {
    dynamic_sidebar('ikea-contact-us');
}
?> 

<?php
get_footer();
?>