<?php ?>
<div class="card-wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card">
            <div class="thumb"><img src="<?php the_post_thumbnail_url();?>"> </div>
            <div class="description">
                <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                <p>
                    <span class="date"><?php the_date(); ?></span>
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </div>
    <?php endwhile;endif; ?>
</div>
