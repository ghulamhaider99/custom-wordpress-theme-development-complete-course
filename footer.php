<?php
/*
* this template is used to display footer
*/
?>

<footer class="site-footer">
    <div class="footer-widgets">
    <?php dynamic_sidebar('footer-1'); ?>
    </div>
    <div class="footer-widgets-2">
    <?php dynamic_sidebar('footer-2'); ?>
    </div>
    <div class="footer-widgets-3">
    <?php dynamic_sidebar('footer-3'); ?>
    </div>
</footer>
</body>
<?php wp_footer() ?>
</html>
