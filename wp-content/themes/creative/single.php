<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="container" data-aos="fade-up" data-aos-offset="10">
            <article class="post">
                <?php the_post_thumbnail(); ?>

                <h1><?php the_title(); ?></h1>

                <div class="post__meta">
                    <?= get_avatar(get_the_author_meta('ID'), 40); ?>
                    <p>
                        Publié le <?php the_date(); ?>
                        par <?php the_author(); ?>
                        Dans la catégorie <?php the_category(); ?>
                        Avec les étiquettes <?php the_tags(); ?>
                    </p>
                </div>

                <div class="post__content">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>