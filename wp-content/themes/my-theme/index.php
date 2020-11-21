<?php get_header(); ?>

<h1>Home</h1>

<?php if ( have_posts() ) : ?>
    <div>
        <h2>Posts:</h2>
        <?php while ( have_posts() ) : the_post(); ?>

            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>

        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>