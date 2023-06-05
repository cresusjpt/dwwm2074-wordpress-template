<?php get_header(); ?>

<header class="header">
    <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="Logo">
    </a>
</header>
<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" width="100%" height="30%" src="<?php the_post_thumbnail() ?>" />
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="post__meta">
                            Publié le <?php the_time(get_option('date_format')); ?>
                            par <?php the_author(); ?>
                        </p>
                        <p>•<?php comments_number(); ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Lire</a>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>


<?php get_footer(); ?>