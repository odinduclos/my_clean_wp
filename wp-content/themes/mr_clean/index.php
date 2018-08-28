<?php get_header(); ?> <!-- ouvrir header,php -->
<body>
    <?php get_sidebar(); ?>
    <div id="content"> <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> <div class="post"> <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> <div class="post_content"> <?php the_content(); ?> </div> </div> <?php endwhile; ?> <?php endif; ?> </div>
    <p class="postmetadata">
        <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
        <?php edit_post_link('Editer', ' &#124; ', ''); ?>
    </p>
    <?php get_footer(); ?>
</body>
</html>