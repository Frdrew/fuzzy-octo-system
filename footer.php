<?php if (! defined('ABSPATH')) { exit; } ?>
</main>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3><?php bloginfo('name'); ?></h3>
            <p>A sacramental, prayer-shaped, community-centered Christian witness in Clovis, New Mexico.</p>
        </div>
        <div>
            <h4>Contact</h4>
            <p><a href="mailto:fatherdrew@cwcclovisnm.com">fatherdrew@cwcclovisnm.com</a></p>
            <p>Clovis, New Mexico</p>
        </div>
        <div>
            <h4>Explore</h4>
            <?php
wp_nav_menu([
    'theme_location' => 'footer',
    'container' => false,
    'fallback_cb' => false,
]);
?>
    <div class="container footer-bottom">
        <p>© <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>.</p>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
