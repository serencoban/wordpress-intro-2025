<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_title('.',false, 'right') . get_bloginfo('name') ?></title>  <!-- display false en gros -->
</head>

<body>
    <header>
    <h1><?= get_bloginfo('name') ?></h1>
    <p><?= get_bloginfo('description') ?></p>
    </header>

    <main>
        <?php 
        //on ouvre la boucle (the loop), structure de controle de contenue propre à wordpress
        if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2><?= get_the_title(); ?></h2>

        <div><?= get_the_content(); ?></div>


        <?php
        //on ferme la boucle the loop

        endwhile; else: ?>
        <p>la page est vide</p>
        <?php endif; ?>

    </main>
    
</body>

</html>