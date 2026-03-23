<?php get_header(); ?>
<section class="page-hero"><div class="container narrow"><h1><?php bloginfo('name'); ?></h1></div></section>
<section class="section"><div class="container narrow content-card">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('post-card'); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
    </article>
<?php endwhile; the_posts_pagination(); else : ?>
    <p>No content found yet.</p>
<?php endif; ?>
</div></section>
<?php get_footer(); ?>
