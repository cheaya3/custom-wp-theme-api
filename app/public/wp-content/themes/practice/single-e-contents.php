
<?php
get_header();
?>
<main role="main">

    <article>
        <!--// TODO アイキャッチの表示切り替え機能を入れる-->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="content">
                <h1><?php the_title();?><span><?php echo get_field('e-title'); ?></span></h1>
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
            <section class="v-card">
                    <img src="<?php echo get_field('menu-image'); ?>">
                    <div class="container">
                        <p><?php echo nl2br(get_field('overview')); ?></p>
                        <dl>
                            <dt>タイプ:</dt>
                            <dd><?php echo get_field('type'); ?></dd>
                            <dt>発刊開始:</dt>
                            <dd>
                            <?php
                            $date_str = get_field('p-date'); // フィールド名を適宜変更

                            if ($date_str) {
                                $date = new DateTime($date_str);
                                echo $date->format('Y/n/j');
                            }
                            ?>
                            </dd>
                            <dt>読者数:</dt>
                            <dd><?php echo get_field('readership'); ?>人</dd>
                        </dl>
                    </div>
            </section>        
    </article>
</main>
<aside></aside>
<?php get_footer(); ?>
