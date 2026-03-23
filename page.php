<?php get_header(); ?>
<section class="page-hero">
    <div class="container narrow">
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="section">
    <div class="container narrow content-card">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>
<?php get_footer(); ?>
