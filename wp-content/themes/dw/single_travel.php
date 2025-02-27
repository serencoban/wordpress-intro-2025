<?php get_header(); ?>

    <?php 
    // On ouvre "la boucle" (The Loop), la structure de contrôle
    // de contenu propre à Wordpress:
    if(have_posts()): while(have_posts()): the_post(); ?>

        <h2><?= get_the_title(); ?></h2>

        <p><?= get_the_excerpt(); ?></p>

        <div class="travel">

            <aside class="countries">
                <div>
                    <h3>Countries id love to travel</h3>
                    <ul>
                        <li>Japan</li>
                        <li>Usa</li>
                        <li>Egypt</li>
                    </ul>
                </div>
                <figure class="flag_img">
                    <?= get_the_post_thumbnail(size: 'large', attr: ['class' => '']); ?>
                </figure>
            </aside>

        </div>

    <?php
    // On ferme "la boucle" (The Loop):
    endwhile; else: ?>
    <p>This country doesn't exist</p>
    <?php endif; ?>
<?php get_footer(); ?>