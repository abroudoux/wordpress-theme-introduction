<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <h1>Hello world</h1>
    <?php get_header(); ?>

    <section>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <p>
                        Article publié le <?php the_time(); ?> par <?php the_author(); ?> 
                    </p>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</body>
</html>