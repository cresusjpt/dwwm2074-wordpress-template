<?php get_header(); ?>

<header class="header">
    <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="Logo">
    </a>
</header>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>