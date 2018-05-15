<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <div class="container-fluid">
            <?php while(have_posts()): the_post(); ?>
                
                <h2><?php the_title(); ?></h2>
                <hr />
                
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><?php the_title(); ?></li>
                </ol>
                
                <article class="card card-body">
                    <?php the_content(); ?>
                </article>
                
            <?php endwhile; ?>
        <div>
    <?php endif; ?>
    
<?php get_footer(); ?>