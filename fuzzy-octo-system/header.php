<?php if (! defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container header-inner">
        <div class="brand-wrap">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) : ?>
                    <span class="brand-logo"><?php the_custom_logo(); ?></span>
                <?php else : ?>
                    <span class="brand-mark">✠</span>
                <?php endif; ?>
                <span class="brand-text">
                    <strong><?php bloginfo('name'); ?></strong>
                    <small><?php bloginfo('description'); ?></small>
                </span>
            </a>
        </div>
        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-nav">☰</button>
        <nav id="primary-nav" class="primary-nav" aria-label="<?php esc_attr_e('Main navigation', 'cwc-clovis'); ?>">
            <?php cwc_primary_menu(); ?>
        </nav>
    </div>
</header>
<main class="site-main">