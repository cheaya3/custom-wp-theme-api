
<?php
get_header();
?>
<main role="main">

    <article>
        <!--// TODO アイキャッチの表示切り替え機能を入れる-->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="content">
                <h1><?php the_title();?></h1>
                <div class="date"><?php the_date();?></div>
                <?php
                the_content();
                ?>
            </section>

            <?php if (comments_open() && !post_password_required()) :?>
                <section class="comment">
                    <?php comments_template('', true); ?>
                </section>
            <?php endif; endwhile; endif; ?>

    </article>

</main>

<?php get_footer(); ?>
