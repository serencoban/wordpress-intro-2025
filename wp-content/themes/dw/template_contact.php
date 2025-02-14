<?php /* Template Name: Pafege "Contact"*/ ?>

<?php get_header(); ?>

        <aside>
            <h2>Contactez-moi</h2>
        </aside>
        <?php 
        //on ouvre la boucle (the loop), structure de controle de contenue propre à wordpress
        if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div><?= get_the_content(); ?></div>


        <?php
        //on ferme la boucle the loop

        endwhile; else: ?>
        <p>la page est vide</p>
        <?php endif; ?>

<?php get_footer(); ?>